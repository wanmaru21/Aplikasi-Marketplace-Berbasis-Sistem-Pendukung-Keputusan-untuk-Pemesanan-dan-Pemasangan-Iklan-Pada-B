<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendors', function (Blueprint $table) {
            $table->id();
            $table->string('nama_ven', 45)->nullable();
            $table->string('nama_perusahaan', 45)->nullable();
            $table->string('Alamat_perusahaan', 45)->nullable();
            $table->string('Notelp_vendor', 45)->nullable();
            $table->string('email', 45)->unique();
            $table->string('password', 128);
            $table->timestamp('email_verified_at')->nullable();
            $table->tinyInteger('status_verif')->nullable();
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
        Schema::dropIfExists('vendors');
    }
}
