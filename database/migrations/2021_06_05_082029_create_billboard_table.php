<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillboardTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('billboard', function (Blueprint $table) {
            $table->id();
            $table->unsignedbigInteger('id_ven');
            $table->string('nama_bill', 45);
            $table->string('alamat_bill', 45);
            $table->string('display', 45)->nullable();
            $table->string('view', 45)->nullable();
            $table->string('penerangan', 45)->nullable();
            $table->integer('panjang')->nullable();
            $table->integer('lebar')->nullable();
            $table->integer('jarak_pandang')->nullable();
            $table->integer('Byk_kendaraan')->nullable();
            $table->string('lat', 45);
            $table->string('long', 45);
            $table->string('Gambar', 45);
            $table->integer('Harga');
            $table->string('Lingkungan', 45);
            $table->tinyInteger('status_sewa')->default(0);
            $table->timestamps();

            $table->foreign('id_ven')->references('id')->on('vendors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('billboard');
    }
}
