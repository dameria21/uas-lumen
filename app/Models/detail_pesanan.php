<?php

// app/Models/DetailPesanan.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailPesanan extends Model
{
    protected $table = 'detail_pesanan';
    protected $primaryKey = 'ID_Detail_Pesanan';
    public $timestamps = true;

    protected $fillable = [
        'ID_Pesanan', 'ID_Produk', 'Jumlah', 'Subtotal'
    ];

    // Hubungan banyak ke satu dengan tabel Pesanan
    public function pesanan()
    {
        return $this->belongsTo(Pesanan::class, 'ID_Pesanan');
    }

    // Hubungan banyak ke satu dengan tabel Produk
    public function produk()
    {
        return $this->belongsTo(Produk::class, 'ID_Produk');
    }
}


