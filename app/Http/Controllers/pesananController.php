<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use Illuminate\Http\Request;

class PesananController extends Controller
{
    public function index()
    {
        $pesanans = Pesanan::all();
        return response()->json($pesanans);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'ID_Pesanan'=>'required',
            'ID_Pelanggan' => 'required',
            'Tanggal_Pemesanan' => 'required',
            'Total_Harga' => 'required',
            'Status_Pesanan' => 'required',
        ]);

        $pesanan = new Pesanan();

        // Assigning data
        $pesanan->ID_Pesanan = $request->input('ID_Pesanan');
        $pesanan->ID_Pelanggan = $request->input('ID_Pelanggan');
        $pesanan->Tanggal_Pemesanan = $request->input('Tanggal_Pemesanan');
        $pesanan->Total_Harga = $request->input('Total_Harga');
        $pesanan->Status_Pesanan = $request->input('Status_Pesanan');

        $pesanan->save();
        return response()->json($pesanan);
    }

    public function show($id)
    {
        $pesanan = Pesanan::find($id);
        return response()->json($pesanan);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'ID_Pesanan'=>'required',
            'ID_Pelanggan' => 'required',
            'Tanggal_Pemesanan' => 'required',
            'Total_Harga' => 'required',
            'Status_Pesanan' => 'required',
        ]);

        $pesanan = Pesanan::find($id);

        // Assigning data
        $pesanan->ID_Pesanan = $request->input('ID_Pesanan');
        $pesanan->ID_Pelanggan = $request->input('ID_Pelanggan');
        $pesanan->Tanggal_Pemesanan = $request->input('Tanggal_Pemesanan');
        $pesanan->Total_Harga = $request->input('Total_Harga');
        $pesanan->Status_Pesanan = $request->input('Status_Pesanan');

        $pesanan->save();
        return response()->json($pesanan);
    }

    public function destroy($id)
    {
        $pesanan = Pesanan::find($id);
        $pesanan->delete();
        return response()->json('Pesanan Berhasil di Hapus');
    }
}
