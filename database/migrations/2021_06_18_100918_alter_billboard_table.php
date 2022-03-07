<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\Types\Nullable;

class AlterBillboardTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('billboard', function (Blueprint $table) {
            $table->dropColumn('lat','long','display','Lingkungan','view','penerangan','Gambar');

        });
        Schema::table('billboard', function (Blueprint $table) {
            $table->double('lat',10,6)->nullable()->after('byk_kendaraan');
            $table->double('long',10,6)->nullable()->after('lat');
            $table->enum('lingkungan', ['jalan raya', 'pertokoan', 'pemukiman'])->after('Harga');;
            $table->enum('display', ['horizontal', 'vertical'])->after('alamat_bill');
            $table->enum('view', ['1', '2'])->after('display');
            $table->enum('penerangan',['front','back'])->after('view');
            $table->string('Gambar', 45)->nullable()->after('long');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
