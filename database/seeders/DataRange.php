<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DataRange extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'tipe' => 'ketinggian',
                'key' => $this->isiData(0.0, 0.1),
                'value' => 'sangat-rendah'
            ],
            [
                'tipe' => 'ketinggian',
                'key' => $this->isiData(0.1, 0.3),
                'value' => 'rendah'
            ],
            [
                'tipe' => 'ketinggian',
                'key' => $this->isiData(0.3, 0.5),
                'value' => 'sedang'
            ],
            [
                'tipe' => 'ketinggian',
                'key' => $this->isiData(0.5, 0.7),
                'value' => 'tinggi'
            ],
            [
                'tipe' => 'ketinggian',
                'key' => $this->isiData(0.7, 0.9),
                'value' => 'sangat-tinggi'
            ],
            [
                'tipe' => 'suhu',
                'key' => $this->isiData(0.0, 0.1),
                'value' => 'sangat-sejuk'
            ],
            [
                'tipe' => 'suhu',
                'key' => $this->isiData(0.1, 0.3),
                'value' => 'sejuk'
            ],
            [
                'tipe' => 'suhu',
                'key' => $this->isiData(0.3, 0.5),
                'value' => 'normal'
            ],
            [
                'tipe' => 'suhu',
                'key' => $this->isiData(0.5, 0.7),
                'value' => 'panas'
            ],
            [
                'tipe' => 'suhu',
                'key' => $this->isiData(0.7, 0.9),
                'value' => 'sangat-panas'
            ],
        ];
        DB::table('range_datas')->insert($data);
    }
    public function isiData($bb, $ba)
    {
        $isiData = '{"batas_atas": ' . $ba . ',
                    "batas_bawah": ' . $bb . '}';
        return ($isiData);
    }
}
