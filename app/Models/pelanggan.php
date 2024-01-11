<?php

// app/Models/Pelanggan.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    protected $table = 'pelanggan';
    protected $primaryKey = 'ID_Pelanggan';
    public $timestamps = true;

    protected $fillable = [
        'Nama', 'Alamat', 'Nomor_Telepon', 'Email'
    ];

    // Hubungan satu ke banyak dengan tabel Pesanan
    public function pesanan()
    {
        return $this->hasMany(Pesanan::class, 'ID_Pelanggan');
    }
}

