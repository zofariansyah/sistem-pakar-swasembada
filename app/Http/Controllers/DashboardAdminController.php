<?php

namespace App\Http\Controllers;

use App\Models\TanamanData;

use Illuminate\Http\Request;

class DashboardAdminController extends Controller
{
    public function index()
    {
        $data_tanaman = TanamanData::get();


        foreach ($data_tanaman as $key => $values) {
            $datafinal[$key] = [
                'id' => $values['id'],
                'nama' => $values['nama_tanaman'],
                'deskripsi' => $values['deskripsi_tanaman'],
                'kelembapan' => $this->parsingDataBawah($values['kelembapan']) . " - " . $this->parsingDataAtas($values['kelembapan']),
                'intensitas_penyinaran' => $this->parsingDataBawah($values['intensitas_penyinaran']) . " - " . $this->parsingDataAtas($values['intensitas_penyinaran']),
                'curah_hujan' => $this->parsingDataBawah($values['curah_hujan']) . " - " . $this->parsingDataAtas($values['curah_hujan']),
                'ph_tanah' => $this->parsingDataBawah($values['ph_tanah']) . " - " . $this->parsingDataAtas($values['ph_tanah']),
                'suhu' => $this->parsingDataBawah($values['suhu']) . " - " . $this->parsingDataAtas($values['suhu']),
                'ketinggian' => $this->parsingDataBawah($values['ketinggian']) . " - " . $this->parsingDataAtas($values['ketinggian']),
                'kelembapan_bawah' => $this->parsingDataBawah($values['kelembapan']),
                'kelembapan_atas' => $this->parsingDataAtas($values['kelembapan']),
                'intensitas_penyinaran_bawah' => $this->parsingDataBawah($values['intensitas_penyinaran']),
                'intensitas_penyinaran_atas' => $this->parsingDataAtas($values['intensitas_penyinaran']),
                'curah_hujan_bawah' => $this->parsingDataBawah($values['curah_hujan']),
                'curah_hujan_atas' => $this->parsingDataAtas($values['curah_hujan']),
                'ph_tanah_bawah' => $this->parsingDataBawah($values['ph_tanah']),
                'ph_tanah_atas' => $this->parsingDataAtas($values['ph_tanah']),
                'suhu_bawah' => $this->parsingDataBawah($values['suhu']),
                'suhu_atas' => $this->parsingDataAtas($values['suhu']),
                'ketinggian_bawah' => $this->parsingDataBawah($values['ketinggian']),
                'ketinggian_atas' => $this->parsingDataAtas($values['ketinggian']),

            ];
        }
        // dd($datafinal);

        return view('dashboard', ['data_tanaman' => $datafinal]);
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
