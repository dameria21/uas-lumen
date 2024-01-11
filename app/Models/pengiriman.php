<?php

// app/Models/Pengiriman.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengiriman extends Model
{
    protected $table = 'pengiriman';
    protected $primaryKey = 'ID_Pengiriman';
    public $timestamps = true;

    protected $fillable = [
        'ID_Pesanan', 'Metode_Pengiriman', 'Alamat_Pengiriman', 'Status_Pengiriman'
    ];

    // Hubungan satu ke satu dengan tabel Pesanan
    public function pesanan()
    {
        return $this->belongsTo(Pesanan::class, 'ID_Pesanan');
    }
}


