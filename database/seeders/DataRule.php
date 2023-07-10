<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DataRule extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rules = [
            [
                'kode' => 'H01',
                'ketinggian' => 'sangat-rendah',
                'suhu' => 'sangat-sejuk'
            ],
            [
                'kode' => 'H02',
                'ketinggian' => 'sangat-rendah',
                'suhu' => 'sejuk'
            ],
            [
                'kode' => 'H03',
                'ketinggian' => 'sangat-rendah',
                'suhu' => 'normal'
            ],
            [
                'kode' => 'H04',
                'ketinggian' => 'sangat-rendah',
                'suhu' => 'panas'
            ],
            [
                'kode' => 'H05',
                'ketinggian' => 'rendah',
                'suhu' => 'sangat-sejuk'
            ],
            [
                'kode' => 'H06',
                'ketinggian' => 'rendah',
                'suhu' => 'sejuk'
            ],
            [
                'kode' => 'H07',
                'ketinggian' => 'rendah',
                'suhu' => 'normal'
            ],
            [
                'kode' => 'H08',
                'ketinggian' => 'rendah',
                'suhu' => 'panas'
            ],
            [
                'kode' => 'H09',
                'ketinggian' => 'rendah',
                'suhu' => 'sangat-panas'
            ],
            [
                'kode' => 'H10',
                'ketinggian' => 'sedang',
                'suhu' => 'sangat-sejuk'
            ],
            [
                'kode' => 'H11',
                'ketinggian' => 'sedang',
                'suhu' => 'sejuk'
            ],
            [
                'kode' => 'H12',
                'ketinggian' => 'sedang',
                'suhu' => 'normal'
            ],
            [
                'kode' => 'H13',
                'ketinggian' => 'sedang',
                'suhu' => 'panas'
            ],
            [
                'kode' => 'H14',
                'ketinggian' => 'sedang',
                'suhu' => 'sangat-panas'
            ],
            [
                'kode' => 'H15',
                'ketinggian' => 'tinggi',
                'suhu' => 'sangat-sejuk'
            ],
            [
                'kode' => 'H16',
                'ketinggian' => 'tinggi',
                'suhu' => 'sejuk'
            ],
            [
                'kode' => 'H17',
                'ketinggian' => 'tinggi',
                'suhu' => 'normal'
            ],
            [
                'kode' => 'H18',
                'ketinggian' => 'tinggi',
                'suhu' => 'panas'
            ],
            [
                'kode' => 'H19',
                'ketinggian' => 'tinggi',
                'suhu' => 'sangat-panas'
            ],
            [
                'kode' => 'H20',
                'ketinggian' => 'sangat-tinggi',
                'suhu' => 'sangat-sejuk'
            ],
            [
                'kode' => 'H21',
                'ketinggian' => 'sangat-tinggi',
                'suhu' => 'sejuk'
            ],
            [
                'kode' => 'H22',
                'ketinggian' => 'sangat-tinggi',
                'suhu' => 'normal'
            ],
            [
                'kode' => 'H23',
                'ketinggian' => 'sangat-tinggi',
                'suhu' => 'panas'
            ],

        ];
        $user = DB::table('rules_fuzzys')->insert($rules);

        $datakesimpulan = [
            [
                'id_rules' => 1,
                'id_tanaman' => 4
            ],
            [
                'id_rules' => 2,
                'id_tanaman' => 4
            ],
            [
                'id_rules' => 3,
                'id_tanaman' => 4
            ],
            [
                'id_rules' => 4,
                'id_tanaman' => 4
            ],
            [
                'id_rules' => 4,
                'id_tanaman' => 1
            ],
            [
                'id_rules' => 5,
                'id_tanaman' => 4
            ],
            [
                'id_rules' => 6,
                'id_tanaman' => 4
            ],
            [
                'id_rules' => 7,
                'id_tanaman' => 4
            ],
            [
                'id_rules' => 7,
                'id_tanaman' => 3
            ],
            [
                'id_rules' => 8,
                'id_tanaman' => 4
            ],
            [
                'id_rules' => 8,
                'id_tanaman' => 1
            ],
            [
                'id_rules' => 8,
                'id_tanaman' => 3
            ],
            [
                'id_rules' => 8,
                'id_tanaman' => 5
            ],
            [
                'id_rules' => 9,
                'id_tanaman' => 5
            ],
            [
                'id_rules' => 10,
                'id_tanaman' => 4
            ],
            [
                'id_rules' => 11,
                'id_tanaman' => 4
            ],
            [
                'id_rules' => 11,
                'id_tanaman' => 2
            ],
            [
                'id_rules' => 12,
                'id_tanaman' => 4
            ],
            [
                'id_rules' => 12,
                'id_tanaman' => 2
            ],
            [
                'id_rules' => 12,
                'id_tanaman' => 3
            ],
            [
                'id_rules' => 13,
                'id_tanaman' => 4
            ],
            [
                'id_rules' => 13,
                'id_tanaman' => 2
            ],
            [
                'id_rules' => 13,
                'id_tanaman' => 1
            ],
            [
                'id_rules' => 13,
                'id_tanaman' => 3
            ],
            [
                'id_rules' => 13,
                'id_tanaman' => 5
            ],
            [
                'id_rules' => 14,
                'id_tanaman' => 2
            ],
            [
                'id_rules' => 14,
                'id_tanaman' => 5
            ],
            [
                'id_rules' => 15,
                'id_tanaman' => 4
            ],
            [
                'id_rules' => 16,
                'id_tanaman' => 4
            ],
            [
                'id_rules' => 16,
                'id_tanaman' => 2
            ],
            [
                'id_rules' => 17,
                'id_tanaman' => 4
            ],
            [
                'id_rules' => 17,
                'id_tanaman' => 2
            ],
            [
                'id_rules' => 18,
                'id_tanaman' => 4
            ],
            [
                'id_rules' => 18,
                'id_tanaman' => 2
            ],
            [
                'id_rules' => 18,
                'id_tanaman' => 5
            ],
            [
                'id_rules' => 19,
                'id_tanaman' => 2
            ],
            [
                'id_rules' => 19,
                'id_tanaman' => 5
            ],
            [
                'id_rules' => 20,
                'id_tanaman' => 4
            ],
            [
                'id_rules' => 21,
                'id_tanaman' => 4
            ],
            [
                'id_rules' => 22,
                'id_tanaman' => 4
            ],
            [
                'id_rules' => 23,
                'id_tanaman' => 4
            ],

        ];

        DB::table('rules_datas')->insert($datakesimpulan);
    }



    public function isiDataArray($data)
    {
        // foreach($data as $datas){
        //     $isiData = '{"batas_atas": ' . $ba . ',
        //         "batas_bawah": ' . $bb . '}';
        // }

        // return ($isiData);
    }
}
