<?php

// database/migrations/2024_01_03_000004_create_pesanan_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesananTable extends Migration
{
    public function up()
    {
        Schema::create('pesanan', function (Blueprint $table) {
            $table->id('ID_Pesanan');
            $table->unsignedBigInteger('ID_Pelanggan')->nullable();
            $table->date('Tanggal_Pemesanan')->nullable();
            $table->string('Total_Harga')->nullable();
            $table->string('Status_Pesanan')->nullable();
            $table->timestamps();

            $table->foreign('ID_Pelanggan')->references('ID_Pelanggan')->on('pelanggan')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('pesanan');
    }
}

