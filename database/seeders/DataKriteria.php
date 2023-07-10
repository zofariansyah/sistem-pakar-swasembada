<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

class DataKriteria extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kriteria = [
            [
                'kode' => 'G01',
                'jenis' => 'ketinggian',
                'nilai_bawah' => 10,
                'nilai_atas' => 100
            ],
            [
                'kode' => 'G02',
                'jenis' => 'ketinggian',
                'nilai_bawah' => 101,
                'nilai_atas' => 250
            ],
            [
                'kode' => 'G03',
                'jenis' => 'ketinggian',
                'nilai_bawah' => 251,
                'nilai_atas' => 500
            ],
            [
                'kode' => 'G04',
                'jenis' => 'ketinggian',
                'nilai_bawah' => 501,
                'nilai_atas' => 1000
            ],
            [
                'kode' => 'G05',
                'jenis' => 'ketinggian',
                'nilai_bawah' => 1001,
                'nilai_atas' => 1500
            ],
            [
                'kode' => 'G06',
                'jenis' => 'suhu',
                'nilai_bawah' => 15,
                'nilai_atas' => 20
            ],
            [
                'kode' => 'G07',
                'jenis' => 'suhu',
                'nilai_bawah' => 20,
                'nilai_atas' => 22
            ],
            [
                'kode' => 'G08',
                'jenis' => 'suhu',
                'nilai_bawah' => 23,
                'nilai_atas' => 24
            ],
            [
                'kode' => 'G09',
                'jenis' => 'suhu',
                'nilai_bawah' => 25,
                'nilai_atas' => 27
            ],
            [
                'kode' => 'G10',
                'jenis' => 'suhu',
                'nilai_bawah' => 28,
                'nilai_atas' => 30
            ],


        ];
        DB::table('tanaman_datas')->insert($kriteria);
    }
}
