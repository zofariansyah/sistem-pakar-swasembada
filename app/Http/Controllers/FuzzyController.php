<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TanamanData;

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
    }
}
