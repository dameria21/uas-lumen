<?php

// database/migrations/2024_01_03_000002_create_pelanggan_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePelangganTable extends Migration
{
    public function up()
    {
        Schema::create('pelanggan', function (Blueprint $table) {
            $table->id('ID_Pelanggan');
            $table->string('Nama')->nullable();
            $table->string('Alamat')->nullable();
            $table->string('Nomor_Telepon')->nullable();
            $table->string('Email')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pelanggan');
    }
}

