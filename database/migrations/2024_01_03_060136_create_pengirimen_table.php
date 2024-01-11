<?php

// database/migrations/2024_01_03_000005_create_pengiriman_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengirimanTable extends Migration
{
    public function up()
    {
        Schema::create('pengiriman', function (Blueprint $table) {
            $table->id('ID_Pengiriman');
            $table->unsignedBigInteger('ID_Pesanan')->nullable();
            $table->string('Metode_Pengiriman')->nullable();
            $table->string('Alamat_Pengiriman')->nullable();
            $table->string('Status_Pengiriman')->nullable();
            $table->timestamps();

            $table->foreign('ID_Pesanan')->references('ID_Pesanan')->on('pesanan')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('pengiriman');
    }
}

