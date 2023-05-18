<?php

namespace App\Http\Controllers;

use App\Models\TanamanData;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Crypt;


class DashboardAdminController extends Controller
{
    public function index()
    {
        $data_tanaman = TanamanData::get();


        foreach ($data_tanaman as $key => $values) {
            $encryptedId = Crypt::encryptString($values['id']);
            $encodedId = base64_encode($encryptedId);
            $datafinal[$key] = [
                'id' => $values['id'],
                'id_encrypt' => $encodedId,
                'nama' => $values['nama_tanaman'],
                'deskripsi' => $values['deskripsi_tanaman'],
                'kelembapan' => $this->parsingDataBawah($values['kelembapan']) . " - " . $this->parsingDataAtas($values['kelembapan']),
                'intensitas_penyinaran' => $this->parsingDataBawah($values['intensitas_penyinaran']) . " - " . $this->parsingDataAtas($values['intensitas_penyinaran']),
                'curah_hujan' => $this->parsingDataBawah($values['curah_hujan']) . " - " . $this->parsingDataAtas($values['curah_hujan']),
                'ph_tanah' => $this->parsingDataBawah($values['ph_tanah']) . " - " . $this->parsingDataAtas($values['ph_tanah']),
                'suhu' => $this->parsingDataBawah($values['suhu']) . " - " . $this->parsingDataAtas($values['suhu']),
                'ketinggian' => $this->parsingDataBawah($values['ketinggian']) . " - " . $this->parsingDataAtas($values['ketinggian']),
                'kelembapan_bawah' => $this->parsingDataBawah($values['kelembapan']),
                'kelembapan_atas' => $this->parsingDataAtas($values['kelembapan']),
                'intensitas_penyinaran_bawah' => $this->parsingDataBawah($values['intensitas_penyinaran']),
                'intensitas_penyinaran_atas' => $this->parsingDataAtas($values['intensitas_penyinaran']),
                'curah_hujan_bawah' => $this->parsingDataBawah($values['curah_hujan']),
                'curah_hujan_atas' => $this->parsingDataAtas($values['curah_hujan']),
                'ph_tanah_bawah' => $this->parsingDataBawah($values['ph_tanah']),
                'ph_tanah_atas' => $this->parsingDataAtas($values['ph_tanah']),
                'suhu_bawah' => $this->parsingDataBawah($values['suhu']),
                'suhu_atas' => $this->parsingDataAtas($values['suhu']),
                'ketinggian_bawah' => $this->parsingDataBawah($values['ketinggian']),
                'ketinggian_atas' => $this->parsingDataAtas($values['ketinggian']),

            ];
        }
        // dd($datafinal);

        return view('dashboard', ['data_tanaman' => $datafinal]);
    }

    public function update(Request $request)
    {
        $id = $request['id'];
        $tanaman = TanamanData::findOrFail($id);

        $tanaman->nama_tanaman = $request->nama_tanaman;
        $tanaman->deskripsi_tanaman = $request['deskripsi_tanaman'];
        $tanaman->kelembapan = $this->isiData($request['kelembapan_bawah'], $request['kelembapan_atas']);
        $tanaman->intensitas_penyinaran = $this->isiData($request['intensitas_penyinaran_bawah'], $request['intensitas_penyinaran_atas']);
        $tanaman->curah_hujan = $this->isiData($request['curah_hujan_bawah'], $request['curah_hujan_atas']);
        $tanaman->ph_tanah = $this->isiData($request['ph_tanah_bawah'], $request['ph_tanah_atas']);
        $tanaman->suhu = $this->isiData($request['suhu_bawah'], $request['suhu_atas']);
        $tanaman->ketinggian = $this->isiData($request['ketinggian_bawah'], $request['ketinggian_atas']);
        // dd($request->request);
        $tanaman->save();

        return back()->with('success', 'Data berhasil terupdate');
    }

    public function store(Request $request)
    {
        $tanaman = TanamanData::create([
            'nama_tanaman' => $request->nama_tanaman,
            'deskripsi_tanaman' => $request['deskripsi_tanaman'],
            'kelembapan' => $this->isiData($request['kelembapan_bawah'], $request['kelembapan_atas']),
            'intensitas_penyinaran' => $this->isiData($request['intensitas_penyinaran_bawah'], $request['intensitas_penyinaran_atas']),
            'curah_hujan' => $this->isiData($request['curah_hujan_bawah'], $request['curah_hujan_atas']),
            'ph_tanah' => $this->isiData($request['ph_tanah_bawah'], $request['ph_tanah_atas']),
            'suhu' => $this->isiData($request['suhu_bawah'], $request['suhu_atas']),
            'ketinggian' => $this->isiData($request['ketinggian_bawah'], $request['ketinggian_atas']),
        ]);



        return back()->with('success', 'Tanaman berhasil tersimpan');
    }

    public function destroy($id)
    {
        $decodedId = base64_decode($id);
        $decryptedId = Crypt::decryptString($decodedId);

        $tanaman = TanamanData::findOrFail($decryptedId);
        $tanaman->delete();

        return back()->with('success', 'Data berhasil dihapus');
    }

    public function isiData($bb, $ba)
    {
        $isiData = '{"batas_atas": ' . $ba . ',
                    "batas_bawah": ' . $bb . '}';
        return ($isiData);
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
