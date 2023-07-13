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
                'key' => $this->isiData(0.0, 0.06),
                'value' => 'sangat-rendah'
            ],
            [
                'tipe' => 'ketinggian',
                'key' => $this->isiData(0.06, 0.16),
                'value' => 'rendah'
            ],
            [
                'tipe' => 'ketinggian',
                'key' => $this->isiData(0.16, 0.32),
                'value' => 'sedang'
            ],
            [
                'tipe' => 'ketinggian',
                'key' => $this->isiData(0.32, 0.66),
                'value' => 'tinggi'
            ],
            [
                'tipe' => 'ketinggian',
                'key' => $this->isiData(0.66, 1),
                'value' => 'sangat-tinggi'
            ],
            [
                'tipe' => 'suhu',
                'key' => $this->isiData(0.0, 0.33),
                'value' => 'sangat-sejuk'
            ],
            [
                'tipe' => 'suhu',
                'key' => $this->isiData(0.33, 0.47),
                'value' => 'sejuk'
            ],
            [
                'tipe' => 'suhu',
                'key' => $this->isiData(0.47, 0.6),
                'value' => 'normal'
            ],
            [
                'tipe' => 'suhu',
                'key' => $this->isiData(0.6, 0.8),
                'value' => 'panas'
            ],
            [
                'tipe' => 'suhu',
                'key' => $this->isiData(0.8, 1),
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
