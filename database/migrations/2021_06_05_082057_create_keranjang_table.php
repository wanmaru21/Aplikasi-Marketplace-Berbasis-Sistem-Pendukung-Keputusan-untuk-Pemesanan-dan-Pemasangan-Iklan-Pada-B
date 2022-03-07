<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKeranjangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keranjang', function (Blueprint $table) {
            $table->unsignedbigInteger('id_pel');
            $table->integer('id_billboard')->nullable();
            $table->tinyInteger('qty')->nullable();
            $table->integer('Harga_sewa')->nullable();
            $table->integer('Total_harga')->nullable();

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
        Schema::dropIfExists('keranjang');
    }
}
