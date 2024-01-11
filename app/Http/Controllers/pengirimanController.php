<?php

namespace App\Http\Controllers;

use App\Models\Pengiriman;
use Illuminate\Http\Request;

class PengirimanController extends Controller
{
    public function index()
    {
        $pengirimans = Pengiriman::all();
        return response()->json($pengirimans);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'ID_Pengiriman' => 'required',
            'ID_Pesanan' => 'required',
            'Metode_Pengiriman' => 'required',
            'Alamat_Pengiriman' => 'required',
            'Status_Pengiriman' => 'required',
        ]);

        $pengiriman = new Pengiriman();

        // Assigning data
        $pengiriman->ID_Pengiriman = $request->input('ID_Pengiriman');
        $pengiriman->ID_Pesanan = $request->input('ID_Pesanan');
        $pengiriman->Metode_Pengiriman = $request->input('Metode_Pengiriman');
        $pengiriman->Alamat_Pengiriman = $request->input('Alamat_Pengiriman');
        $pengiriman->Status_Pengiriman = $request->input('Status_Pengiriman');

        $pengiriman->save();
        return response()->json($pengiriman);
    }

    public function show($id)
    {
        $pengiriman = Pengiriman::find($id);
        return response()->json($pengiriman);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'ID_Pengiriman' => 'required',
            'ID_Pesanan' => 'required',
            'Metode_Pengiriman' => 'required',
            'Alamat_Pengiriman' => 'required',
            'Status_Pengiriman' => 'required',
        ]);

        $pengiriman = Pengiriman::find($id);

        // Assigning data
        $pengiriman->ID_Pengiriman = $request->input('ID_Pengiriman');
        $pengiriman->ID_Pesanan = $request->input('ID_Pesanan');
        $pengiriman->Metode_Pengiriman = $request->input('Metode_Pengiriman');
        $pengiriman->Alamat_Pengiriman = $request->input('Alamat_Pengiriman');
        $pengiriman->Status_Pengiriman = $request->input('Status_Pengiriman');

        $pengiriman->save();
        return response()->json($pengiriman);
    }

    public function destroy($id)
    {
        $pengiriman = Pengiriman::find($id);
        $pengiriman->delete();
        return response()->json('Pengiriman Berhasil di Hapus');
    }
}
