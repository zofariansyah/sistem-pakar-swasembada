<?php

namespace App\Http\Controllers;

use App\Models\TanamanData;
use Illuminate\Http\Request;

class HitungTanamanController extends Controller
{
    public function index()
    {
        $jml = TanamanData::count();

        return view('index', ['jumlahtanaman' => $jml]);
    }
    public function hitung(Request $request)
    {

        $hasilOutputTanaman = [];
        $data_tanaman = TanamanData::all();
        $adaTanaman = false;
        $tanaman_alternatifDeskripsiFinal = [];


        $skor_tanaman = [];
        $dataKriteria = ['kelembapan', 'intensitas_penyinaran', 'curah_hujan', 'ph_tanah', 'suhu', 'ketinggian'];
        $dataKriteriaNama = [
            'kelembapan' => 'Kelembapan',
            'intensitas_penyinaran' => 'Intensitas Penyinaran',
            'curah_hujan' => 'Curah Hujan',
            'ph_tanah' => 'PH Tanah',
            'suhu' => 'Suhu',
            'ketinggian' => 'Ketinggian'
        ];
        $skor_tanaman_kelembapan = [];
        $skor_tanaman_intensitas_penyinaran = [];
        $skor_tanaman_curah_hujan = [];
        $skor_tanaman_ph_tanah = [];
        $skor_tanaman_suhu = [];
        $skor_tanaman_ketinggian = [];


        foreach ($data_tanaman as $key => $data) {

            if (
                $this->commandIf('kelembapan', $request['kelembapan'], $data_tanaman[$key])
            ) {

                $skor_tanaman_kelembapan[$key] = +1;
            } elseif (!$this->commandIf('kelembapan', $request['kelembapan'], $data_tanaman[$key])) {
                $skor_tanaman_kelembapan[$key] = 0;
            }

            if (
                $this->commandIf('intensitas_penyinaran', $request['intensitas_penyinaran'], $data_tanaman[$key])
            ) {

                $skor_tanaman_intensitas_penyinaran[$key] = +1;
            } elseif (!$this->commandIf('intensitas_penyinaran', $request['intensitas_penyinaran'], $data_tanaman[$key])) {
                $skor_tanaman_intensitas_penyinaran[$key] = 0;
            }
            if (
                $this->commandIf('curah_hujan', $request['curah_hujan'], $data_tanaman[$key])
            ) {
                $skor_tanaman_curah_hujan[$key] = +1;
            } elseif (!$this->commandIf('curah_hujan', $request['curah_hujan'], $data_tanaman[$key])) {
                $skor_tanaman_curah_hujan[$key] = 0;
            }
            if (
                $this->commandIf('ph_tanah', $request['ph_tanah'], $data_tanaman[$key])
            ) {
                $skor_tanaman_ph_tanah[$key] = +1;
            } elseif (!$this->commandIf('ph_tanah', $request['ph_tanah'], $data_tanaman[$key])) {
                $skor_tanaman_ph_tanah[$key] = 0;
            }
            if (
                $this->commandIf('suhu', $request['suhu'], $data_tanaman[$key])
            ) {
                $skor_tanaman_suhu[$key] = +1;
            } elseif (!$this->commandIf('suhu', $request['suhu'], $data_tanaman[$key])) {
                $skor_tanaman_suhu[$key] = 0;
            }
            if (
                $this->commandIf('ketinggian', $request['ketinggian'], $data_tanaman[$key])
            ) {
                $skor_tanaman_ketinggian[$key] = +1;
            } elseif (!$this->commandIf('ketinggian', $request['ketinggian'], $data_tanaman[$key])) {
                $skor_tanaman_ketinggian[$key] = 0;
            }
        };


        $matriksTotal = [
            $skor_tanaman_kelembapan,
            $skor_tanaman_intensitas_penyinaran,
            $skor_tanaman_curah_hujan,
            $skor_tanaman_ph_tanah,
            $skor_tanaman_suhu,
            $skor_tanaman_ketinggian
        ];

        //hitung jumlah pembobotan setiap tanaman
        $bobotTanaman = [];
        foreach ($data_tanaman as $keytanaman => $data) {
            $jumlah[$keytanaman] = 0;
            foreach ($matriksTotal as $row) {
                if (isset($row[$keytanaman])) {
                    $jumlah[$keytanaman] += $row[$keytanaman];
                    $bobotTanaman[$keytanaman] = $jumlah[$keytanaman];
                }
            }
        }

        // untuk menentukan harus memenuhi semua kriteria
        foreach ($bobotTanaman as $key => $data) {
            if ($bobotTanaman[$key] == 6) {
                $hasilOutputTanaman[] = $data_tanaman[$key]->nama_tanaman;
                $tanaman_alternatifDeskripsiFinal[] = $data_tanaman[$key]->deskripsi_tanaman;
                $adaTanaman = true;
            }
        }



        //Kondisi untuk menentukan apakah ada tanaman yang memenuhi atau alternatif saja
        if ($hasilOutputTanaman == []) {
            $nilai_terbesar = max($bobotTanaman);
            $tanaman_alternatif = array();
            $tanaman_alternatif_array = array();
            $tanaman_alternatifNama = array();

            foreach ($bobotTanaman as $indeks => $nilai) {
                if ($nilai == $nilai_terbesar) {

                    $tanaman_alternatif_array[] = $indeks;
                    $tanaman_alternatif[] = $data_tanaman[$indeks]->id;
                    $tanaman_alternatifNama[] = $data_tanaman[$indeks]->nama_tanaman;
                }
            }


            $tanaman_alternatif_array_mapping = [];
            foreach ($tanaman_alternatif_array as $keya => $valuea) {
                $kekurangans = [];
                foreach ($matriksTotal as $key => $value) {
                    foreach ($value as $keys => $values) {
                        if ($keys == $valuea && $values == 0) {
                            $kekurangans[] = $key;
                        }
                    };
                };

                $tanaman_alternatif_array_mapping[] = [$tanaman_alternatif_array[$keya], $kekurangans];
            };

            $alternatifArrayMaping = [];
            foreach ($tanaman_alternatif_array_mapping as $keyss => $valuess) {
                $alternatifs = [];
                foreach ($kekurangans as $keys => $values) {

                    $alternatifs[] = $dataKriteria[$values];
                }
                $alternatifArrayMaping[$keyss] =  $alternatifs;
            }


            $alternatifTanamanMapping = array();
            foreach ($alternatifArrayMaping as $keysAlt => $values) {
                foreach ($values as $keyss => $valuess) {
                    $alternatifTanamanMapping[$keysAlt][] = [
                        'nama_alt' => $dataKriteriaNama[$valuess],
                        'batas' => "Memerlukan diantara " . $this->parsingDataBawah(TanamanData::where('id', $tanaman_alternatif[$keysAlt])->first()->$valuess) . " dan " .
                            $this->parsingDataAtas(TanamanData::where('id', $tanaman_alternatif[$keysAlt])->first()->$valuess)
                    ];
                }
            }
            foreach ($tanaman_alternatifNama as $keys => $values) {
                $tanaman_alternatifNama[$keys] = [
                    'nama_tanaman' => $tanaman_alternatifNama[$keys],
                    'kriteria' => $alternatifTanamanMapping[$keys]
                ];
            }
            $hasilOutputTanaman =  $tanaman_alternatifNama;
            $adaTanaman = false;
        }


        $data = [
            'tanaman' => $hasilOutputTanaman,
            'tanaman_deskripsi' => $tanaman_alternatifDeskripsiFinal,
            'adaTanaman' => $adaTanaman,

        ];
        // dd($data);
        return view('hasil', $data);
    }

    public function commandIf($data, $request, $data_tanaman)
    {
        // return untuk fungsi if biar tidak mengulang dengan pola
        return $request <= $this->parsingDataAtas($data_tanaman->$data)
            && $request >= $this->parsingDataBawah(
                $data_tanaman->$data
            );
    }

    public function parsingDataAtas($data)
    {
        $dataparsing = json_decode($data);
        return $dataparsing->batas_atas;
    }

    public function parsingDataBawah($data)
    {
        $dataparsing = json_decode($data);
        return $dataparsing->batas_bawah;
    }
}
