<?php

// database/migrations/xxxx_xx_xx_create_pemakaian_air_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemakaianAirTable extends Migration
{
    public function up()
    {
        Schema::create('pemakaian_air', function (Blueprint $table) {
            $table->id('id_pemakaian');
            $table->unsignedBigInteger('id'); // foreign key ke users.id
            $table->integer('meter_awal');
            $table->integer('meter_akhir');
            $table->string('bulan_tahun', 7)->nullable();
            $table->date('tanggal_input')->nullable();
            $table->integer('total_pemakaian')->nullable();
            $table->timestamps();

            // Foreign key constraint (jika ingin)
            $table->foreign('id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('pemakaian_air');
    }
}


