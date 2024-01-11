<?php

// database/migrations/2024_01_03_000006_create_detail_pesanan_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailPesananTable extends Migration
{
    public function up()
    {
        Schema::create('detail_pesanan', function (Blueprint $table) {
            $table->id('ID_Detail_Pesanan');
            $table->unsignedBigInteger('ID_Pesanan')->nullable();
            $table->unsignedBigInteger('ID_Produk')->nullable();
            $table->integer('Jumlah')->nullable();
            $table->string('Subtotal')->nullable();
            $table->timestamps();

            $table->foreign('ID_Pesanan')->references('ID_Pesanan')->on('pesanan')->onDelete('cascade');
            $table->foreign('ID_Produk')->references('ID_Produk')->on('produk')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('detail_pesanan');
    }
}
