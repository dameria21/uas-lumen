<?php

// app/Models/Produk.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    protected $table = 'produk';
    protected $primaryKey = 'ID_Produk';
    public $timestamps = true;

    protected $fillable = [
        'Nama_Produk', 'Harga', 'Stok', 'Deskripsi'
    ];

    // Hubungan satu ke banyak dengan tabel DetailPesanan
    public function detailPesanan()
    {
        return $this->hasMany(DetailPesanan::class, 'ID_Produk');
    }
}


