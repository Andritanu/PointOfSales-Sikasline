<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblBarangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_barang', function (Blueprint $table) {
            $table->id('kd_barang');
            $table->string('nama_barang');
            $table->integer('harga_beli');
            $table->string('kd_merek');
            $table->string('kd_distributor');
            $table->date('tanggal_masuk');
            $table->integer('harga_barang');
            $table->integer('stok_barang');
            $table->string('keterangan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_barang');
    }
}
