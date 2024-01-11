<?php

// database/migrations/2024_01_03_000003_create_produk_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdukTable extends Migration
{
    public function up()
    {
        Schema::create('produk', function (Blueprint $table) {
            $table->id('ID_Produk');
            $table->string('Nama_Produk')->nullable();
            $table->string('Harga')->nullable();
            $table->integer('Stok')->nullable();
            $table->text('Deskripsi')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('produk');
    }
}

