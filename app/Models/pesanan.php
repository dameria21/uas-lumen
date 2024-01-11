<?php

// app/Models/Pesanan.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    protected $table = 'pesanan';
    protected $primaryKey = 'ID_Pesanan';
    public $timestamps = true;

    protected $fillable = [
        'ID_Pelanggan', 'Tanggal_Pemesanan', 'Total_Harga', 'Status_Pesanan'
    ];

    // Hubungan banyak ke satu dengan tabel Pelanggan
    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class, 'ID_Pelanggan');
    }

    // Hubungan satu ke satu dengan tabel Pengiriman
    public function pengiriman()
    {
        return $this->hasOne(Pengiriman::class, 'ID_Pesanan');
    }

    // Hubungan satu ke banyak dengan tabel DetailPesanan
    public function detailPesanan()
    {
        return $this->hasMany(DetailPesanan::class, 'ID_Pesanan');
    }
}


