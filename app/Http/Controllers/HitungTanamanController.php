<?php

namespace App\Http\Controllers;

use App\Models\TanamanData;
use Illuminate\Http\Request;

class HitungTanamanController extends Controller
{
    public function hitung(Request $request)
    {


        $data_tanaman = TanamanData::all();

        $skor_tanaman = [];

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

        dd($matriksTotal);
    }

    public function commandIf($data, $request, $data_tanaman)
    {

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
