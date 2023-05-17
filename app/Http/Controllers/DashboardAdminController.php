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
                'nama' => $values['nama_tanaman'],
                'deskripsi'
            ];
        }
        dd($datafinal);
        return view('dashboard');
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
