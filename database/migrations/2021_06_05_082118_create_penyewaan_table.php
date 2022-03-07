<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenyewaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penyewaan', function (Blueprint $table) {
            $table->id();
            $table->unsignedbigInteger('id_pel');
            $table->dateTime('tgl_awal_sewa');
            $table->dateTime('tgl_akhir_sewa');
            $table->string('total_harga', 45);
            $table->tinyInteger('status_pembayaran');
            $table->string('bukti_transfer', 45)->nullable();
            $table->dateTime('tgl_transaksi')->nullable();

            $table->foreign('id_pel')->references('id')->on('pelanggan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penyewaan');
    }
}
