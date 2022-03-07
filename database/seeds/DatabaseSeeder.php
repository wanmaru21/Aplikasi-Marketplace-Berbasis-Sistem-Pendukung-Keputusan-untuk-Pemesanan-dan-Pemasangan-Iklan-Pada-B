<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('admins')->insert([
        //    'nama_adm' => 'Dedi Iswara',
        //    'username' => 'dediswara',
        //    'password' => Hash::make('admindedi'),
        //]);

         //DB::table('pelanggan')->insert([
           // 'nama_pel' => 'Ikaridana',
             //'email' => 'ikaridana@mail.com',
             //'password' => Hash::make('12345678'),
         //]);
        // DB::table('vendors')->insert([
        //     'nama_ven' => 'Ika Aridana',
        //     'nama_perusahaan' => 'Cornplake Corporation',
        //     'Alamat_perusahaan' => 'Jl. jalan No. 1',
        //     'email' => 'ika.aridana@mail.com',
        //     'password' => Hash::make('fr33@yU2c6'),
        // ]);

        DB::table('billboard')->insert([
            'nama_bill' => 'Billboard Jl T Umar 121',
            'alamat_bill' => 'Jl T Umar 121',
            'display' => 'horizontal',
            'view' => '1',
            'penerangan' => 'front',
            'panjang' => '8',
            'lebar' => '4',
            'jarak_pandang' => '200',
            'byk_kendaraan' => '350',
            'Harga' => '350000000',
            'lingkungan' => 'jalan raya',
            'status_sewa' => '1',
        ]);
    }
}
