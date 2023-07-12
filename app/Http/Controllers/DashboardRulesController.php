<?php

namespace App\Http\Controllers;

use App\Models\RulesData;
use App\Models\RulesFuzzy;
use Illuminate\Support\Facades\Crypt;


use App\Models\TanamanData;


use Illuminate\Http\Request;

class DashboardRulesController extends Controller
{
    public function index()
    {
        $data_rule = RulesFuzzy::get();
        $data_tanaman = TanamanData::get();


        foreach ($data_rule as $key => $values) {
            $encryptedId = Crypt::encryptString($values['id']);
            $encodedId = base64_encode($encryptedId);
            $tanaman = RulesData::where('id_rules', $values['id'])->get();
            $tanamanarray = [];
            foreach ($tanaman as $data) {
                $tanamanarray[] = TanamanData::where('id', $data['id_tanaman'])->first();
            }
            $datafinal[$key] = [
                'id' => $values['id'],
                'id_encrypt' => $encodedId,
                'kode' => $values['kode'],
                'ketinggian' => $this->convertPenamaan($values['ketinggian']),
                'suhu' => $this->convertPenamaan($values['suhu']),
                'tanaman' => $tanamanarray
            ];
        }
        // dd($datafinal);

        return view('dashboard.rules', ['data_rules' => $datafinal, 'data_tanaman' => $data_tanaman]);
    }

    function convertPenamaan($data)
    {
        $value = "";
        if ($data == 'sangat-rendah') {
            $value = 'Sangat Rendah';
        } else if ($data == 'rendah') {
            $value = ' Rendah';
        } else if ($data == 'sedang') {
            $value = 'Sedang';
        } else if ($data == 'tinggi') {
            $value = 'Tinggi';
        } else if ($data == 'sangat-tinggi') {
            $value = 'Sangat Tinggi';
        } else if ($data == 'tinggi-sekali') {
            $value = 'Tinggi Sekali';
        } else if ($data == 'sangat-sejuk') {
            $value = 'Sangat Sejuk';
        } else if ($data == 'sejuk') {
            $value = 'Sejuk';
        } else if ($data == 'normal') {
            $value = 'Normal';
        } else if ($data == 'panas') {
            $value = 'Panas';
        } else if ($data == 'sangat-panas') {
            $value = 'Sangat Panas';
        } else if ($data == 'panas-sekali') {
            $value = 'Panas Sekali';
        }
        return $value;
    }
}
