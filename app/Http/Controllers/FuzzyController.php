<?php

namespace App\Http\Controllers;

use App\Models\RangeData;
use App\Models\RulesFuzzy;
use App\Models\TanamanData;
use Illuminate\Http\Request;

class FuzzyController extends Controller
{
    public function index()
    {
        $jml = TanamanData::count();

        return view('index-fuzzy', ['jumlahtanaman' => $jml]);
    }

    public function hitung(Request $request)
    {

        $ketinggian = 1200;
        $suhu = 17;

        $ketinggian_max = 1500;
        $ketinggian_low = 10;

        $suhu_max = 30;
        $suhu_low = 15;

        $nilai_kategori_ketinggian = ($ketinggian - $ketinggian_low) / ($ketinggian_max - $ketinggian_low);
        $nilai_kategori_suhu = ($suhu - $suhu_low) / ($suhu_max - $suhu_low);

        $range_data_ketinggian = RangeData::where('tipe', 'ketinggian')->get();
        $range_data_suhu = RangeData::where('tipe', 'suhu')->get();


        //pengecekan kategori pada setiap parameter
        $kategori_ketinggian = "";
        $kategori_suhu = "";
        foreach ($range_data_ketinggian as $key => $data) {
            $bawah = $this->parsingDataBawah($range_data_ketinggian[$key]['key']);
            $atas = $this->parsingDataAtas($range_data_ketinggian[$key]['key']);

            if ($nilai_kategori_ketinggian > $bawah  && $nilai_kategori_ketinggian <= $atas) {
                $kategori_ketinggian = $range_data_ketinggian[$key]['value'];
                $data = [
                    'bawah' => $bawah,
                    'atas' => $atas,
                    'nilai' => $nilai_kategori_ketinggian,
                    'val' => $kategori_ketinggian
                ];
            };
        }

        foreach ($range_data_suhu as $key => $data) {
            $bawah = $this->parsingDataBawah($range_data_suhu[$key]['key']);
            $atas = $this->parsingDataAtas($range_data_suhu[$key]['key']);

            if ($nilai_kategori_suhu > $bawah  && $nilai_kategori_suhu <= $atas) {
                $kategori_suhu = $range_data_suhu[$key]['value'];
            };
        }


        //perhitungan sesuai rule
        $rule = RulesFuzzy::get();
        $id_hasil = "";
        foreach ($rule as $key => $value) {
            if ($rule[$key]['ketinggian'] == $kategori_ketinggian && $rule[$key]['suhu']  == $kategori_suhu) {
                $id_hasil = $rule[$key]['id'];
            }
        }
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
