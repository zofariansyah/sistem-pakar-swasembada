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
        $jml = TanamanData::count();

        foreach ($data_tanaman as $key => $values) {
            $encryptedId = Crypt::encryptString($values['id']);
            $encodedId = base64_encode($encryptedId);
            $datafinal[$key] = [
                'id' => $values['id'],
                'id_encrypt' => $encodedId,
                'nama' => $values['nama_tanaman'],
                'deskripsi' => $values['deskripsi_tanaman'],
            ];
        }
        // dd($datafinal);

        return view('dashboard-fuzzy', ['data_tanaman' => $datafinal, 'jumlahtanaman' => $jml]);
    }

    public function update(Request $request)
    {
        $id = $request['id'];
        $tanaman = TanamanData::findOrFail($id);

        $tanaman->nama_tanaman = $request->nama_tanaman;
        $tanaman->deskripsi_tanaman = $request['deskripsi_tanaman'];

        $tanaman->save();

        return back()->with('success', 'Data berhasil terupdate');
    }

    public function store(Request $request)
    {
        $tanaman = TanamanData::create([
            'nama_tanaman' => $request->nama_tanaman,
            'deskripsi_tanaman' => $request['deskripsi_tanaman'],
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
