<?php

namespace App\Http\Controllers;

use App\Models\produk;
use Illuminate\Http\Request;

class produkController extends Controller
{
    public function index()
    {
        $produk = produk::all();
        return response()->json($produk);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'Nama_Produk' => 'required',
            'Harga' => 'required',
            'Stok' => 'required',
            'Deskripsi' => 'required',
        ]);

        $produk = new produk();

        // Assigning data
        $produk->ID_Produk = $request->input('ID_Produk');
        $produk->Nama_Produk = $request->input('Nama_Produk');
        $produk->Harga = $request->input('Harga');
        $produk->Stok = $request->input('Stok');
        $produk->Deskripsi = $request->input('Deskripsi');

        $produk->save();
        return response()->json("Produk berhasil ditambahkan");
    }

    public function show($id)
    {
        $produk = produk::find($id);
        return response()->json($produk);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'Nama_Produk' => 'required',
            'Harga' => 'required',
            'Stok' => 'required',
            'Deskripsi' => 'required',
        ]);

        $produk = produk::find($id);

        // Assigning data
        $produk->Nama_Produk = $request->input('Nama_Produk');
        $produk->Harga = $request->input('Harga');
        $produk->Stok = $request->input('Stok');
        $produk->Deskripsi = $request->input('Deskripsi');

        $produk->save();
        return response()->json($produk);
    }

    public function destroy($id)
    {
        $produk = produk::find($id);
        $produk->delete();
        return response()->json('Produk Berhasil di Hapus');
    }
}
