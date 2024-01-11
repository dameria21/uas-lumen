<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function index()
    {
        $pelanggans = Pelanggan::all();
        return response()->json($pelanggans);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'ID_Pelanggan'=>'ID_Pelanggan',
            'Nama' => 'required',
            'Alamat' => 'required',
            'Nomor_Telepon' => 'required',
            'Email' => 'required|email',
        ]);

        $pelanggan = new Pelanggan();

        // Assigning data
        $pelanggan->ID_Pelanggan = $request->input('ID_Pelanggan');
        $pelanggan->Nama = $request->input('Nama');
        $pelanggan->Alamat = $request->input('Alamat');
        $pelanggan->Nomor_Telepon = $request->input('Nomor_Telepon');
        $pelanggan->Email = $request->input('Email');

        $pelanggan->save();
        return response()->json($pelanggan);
    }

    public function show($id)
    {
        $pelanggan = Pelanggan::find($id);
        return response()->json($pelanggan);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'ID_Pelanggan'=>'ID_Pelanggan',
            'Nama' => 'required',
            'Alamat' => 'required',
            'Nomor_Telepon' => 'required',
            'Email' => 'required|email',
        ]);

        $pelanggan = Pelanggan::find($id);

        // Assigning data
        $pelanggan->ID_Pelanggan = $request->input('ID_Pelanggan');
        $pelanggan->Nama = $request->input('Nama');
        $pelanggan->Alamat = $request->input('Alamat');
        $pelanggan->Nomor_Telepon = $request->input('Nomor_Telepon');
        $pelanggan->Email = $request->input('Email');

        $pelanggan->save();
        return response()->json($pelanggan);
    }

    public function destroy($id)
    {
        $pelanggan = Pelanggan::find($id);
        $pelanggan->delete();
        return response()->json('Pelanggan Berhasil di Hapus');
    }
}
