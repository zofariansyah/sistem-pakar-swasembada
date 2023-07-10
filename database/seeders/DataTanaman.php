<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

class DataTanaman extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tanaman = [
            [
                'nama_tanaman' => 'Kacang Hijau',
                'deskripsi_tanaman' => 'Ini adalah deskripsi untuk Kacang Hijau',
            ],
            [
                'nama_tanaman' => 'Kacang Panjang',
                'deskripsi_tanaman' => 'Ini adalah deskripsi untuk KP',
            ],
            [
                'nama_tanaman' => 'Kedelai',
                'deskripsi_tanaman' => 'Ini adalah deskripsi untuk Kedelai',
            ],
            [
                'nama_tanaman' => 'Singkong',
                'deskripsi_tanaman' => 'Ini adalah deskripsi untuk Singkong',
            ],
            [
                'nama_tanaman' => 'Talas',
                'deskripsi_tanaman' => 'Ini adalah deskripsi untuk Talas',
            ]
        ];
        DB::table('tanaman_datas')->insert($tanaman);
    }

    public function isiData($bb, $ba)
    {
        $isiData = '{"batas_atas": ' . $ba . ',
                    "batas_bawah": ' . $bb . '}';
        return ($isiData);
    }
}
