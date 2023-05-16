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
                'kelembapan' => $this->isiData(50, 80),
                'intensitas_penyinaran' => $this->isiData(9, 10),
                'curah_hujan' => $this->isiData(50, 200),
                'ph_tanah' => $this->isiData(5.5, 6.5),
                'suhu' => $this->isiData(25, 27),
                'ketinggian' => $this->isiData(5, 700)
            ],
            [
                'nama_tanaman' => 'Kacang Panjang',
                'deskripsi_tanaman' => 'Ini adalah deskripsi untuk KP',
                'kelembapan' => $this->isiData(50, 70),
                'intensitas_penyinaran' => $this->isiData(8, 12),
                'curah_hujan' => $this->isiData(50, 125),
                'ph_tanah' => $this->isiData(5.5, 6.5),
                'suhu' => $this->isiData(20, 30),
                'ketinggian' => $this->isiData(600, 700)
            ],
            [
                'nama_tanaman' => 'Kedelai',
                'deskripsi_tanaman' => 'Ini adalah deskripsi untuk Kedelai',
                'kelembapan' => $this->isiData(70, 80),
                'intensitas_penyinaran' => $this->isiData(10, 12),
                'curah_hujan' => $this->isiData(100, 200),
                'ph_tanah' => $this->isiData(5.5, 6.5),
                'suhu' => $this->isiData(23, 27),
                'ketinggian' => $this->isiData(100, 500)
            ],
            [
                'nama_tanaman' => 'Singkong',
                'deskripsi_tanaman' => 'Ini adalah deskripsi untuk Singkong',
                'kelembapan' => $this->isiData(60, 65),
                'intensitas_penyinaran' => $this->isiData(9, 11),
                'curah_hujan' => $this->isiData(125, 160),
                'ph_tanah' => $this->isiData(5.5, 6.5),
                'suhu' => $this->isiData(15, 27),
                'ketinggian' => $this->isiData(10, 1500)
            ],
            [
                'nama_tanaman' => 'Talas',
                'deskripsi_tanaman' => 'Ini adalah deskripsi untuk Talas',
                'kelembapan' => $this->isiData(60, 65),
                'intensitas_penyinaran' => $this->isiData(10, 11),
                'curah_hujan' => $this->isiData(155, 160),
                'ph_tanah' => $this->isiData(5.5, 6.5),
                'suhu' => $this->isiData(25, 30),
                'ketinggian' => $this->isiData(250, 1000)
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
