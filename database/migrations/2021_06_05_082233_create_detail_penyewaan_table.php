<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailPenyewaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_penyewaan', function (Blueprint $table) {
            $table->unsignedbigInteger('id_billboard');
            $table->unsignedbigInteger('id_penyewaan');
            $table->tinyInteger('qty')->nullable();
            $table->integer('Harga_sewa')->nullable();
            $table->integer('Total_harga')->nullable();
            $table->primary(['id_billboard', 'id_penyewaan']);

            $table->foreign('id_billboard')->references('id')->on('billboard');
            $table->foreign('id_penyewaan')->references('id')->on('penyewaan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_penyewaan');
    }
}
