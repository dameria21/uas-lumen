<?php

namespace App\Http\Controllers;

use App\Models\DetailPesanan;
use Illuminate\Http\Request;

class DetailPesananController extends Controller
{
    public function index()
    {
        $detailPesanan = DetailPesanan::all();
        return response()->json($detailPesanan);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'ID_Detail_Pesanan'=>'ID_Detail_Pesanan',
            'ID_Pesanan' => 'required',
            'ID_Produk' => 'required',
            'Jumlah' => 'required|numeric',
            'Subtotal' => 'required',
        ]);

        $detailPesanan = new DetailPesanan();

        // Assigning data
        $detailPesanan->ID_Detail_Pesanan = $request->input('ID_Detail_Pesanan');
        $detailPesanan->ID_Pesanan = $request->input('ID_Pesanan');
        $detailPesanan->ID_Produk = $request->input('ID_Produk');
        $detailPesanan->Jumlah = $request->input('Jumlah');
        $detailPesanan->Subtotal = $request->input('Subtotal');

        $detailPesanan->save();
        return response()->json($detailPesanan);
    }

    public function show($id)
    {
        $detailPesanan = DetailPesanan::find($id);
        return response()->json($detailPesanan);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'ID_Detail_Pesanan'=>'ID_Detail_Pesanan',
            'ID_Pesanan' => 'required',
            'ID_Produk' => 'required',
            'Jumlah' => 'required|numeric',
            'Subtotal' => 'required',
        ]);

        $detailPesanan = DetailPesanan::find($id);

        // Assigning data
        $detailPesanan->ID_Detail_Pesanan = $request->input('ID_Detail_Pesanan');
        $detailPesanan->ID_Pesanan = $request->input('ID_Pesanan');
        $detailPesanan->ID_Produk = $request->input('ID_Produk');
        $detailPesanan->Jumlah = $request->input('Jumlah');
        $detailPesanan->Subtotal = $request->input('Subtotal');

        $detailPesanan->save();
        return response()->json($detailPesanan);
    }

    public function destroy($id)
    {
        $detailPesanan = DetailPesanan::find($id);
        $detailPesanan->delete();
        return response()->json('Detail Pesanan Berhasil di Hapus');
    }
}
