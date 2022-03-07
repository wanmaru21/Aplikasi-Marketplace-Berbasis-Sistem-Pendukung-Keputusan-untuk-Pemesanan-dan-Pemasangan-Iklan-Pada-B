<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('guest');
});

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/recommendation', 'RekomendasiController@index')->name('rekomendasi');
Route::get('/cart/{nama_pel}', 'KeranjangController@index')->name('keranjang');
Route::get('image/logo/{Logo1.png}', 'HomeController@displaylogo')->name('image.displaylogo');



//route for admins
Route::prefix('admin')->group(function(){
    Route::get('/', 'Admin\AdminController@index')->name('admin.dashboard');
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::post('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
    
    //admin for pelanggan
    Route::get('/pelanggan', 'Admin\AdminController@showPelanggan')->name('admin.showPelanggan');
    Route::get('/pelanggan/create', 'Admin\AdminController@createPelanggan')->name('admin.createPelanggan');
    Route::post('/pelanggan', 'Admin\AdminController@storePelanggan')->name('admin.storePelanggan');
    Route::get('/pelanggan/edit/{id}', 'Admin\AdminController@editPelanggan')->name('admin.editPelanggan');
    Route::post('/pelanggan/update/{id}', 'Admin\AdminController@updatePelanggan')->name('admin.updatePelanggan');
    Route::get('/pelanggan/delete/{id}', 'Admin\AdminController@destroyPelanggan')->name('admin.destroyPelanggan');
    
    //admin for vendor
    Route::get('/vendor', 'Admin\AdminController@showVendor')->name('admin.showVendor');
    Route::get('/vendor/create', 'Admin\AdminController@createVendor')->name('admin.createVendor');
    Route::post('/vendor', 'Admin\AdminController@storeVendor')->name('admin.storeVendor');
    Route::get('/vendor/edit/{id}', 'Admin\AdminController@editVendor')->name('admin.editVendor');
    Route::post('/vendor/update/{id}', 'Admin\AdminController@updateVendor')->name('admin.updateVendor');
    Route::get('/vendor/delete/{id}', 'Admin\AdminController@destroyVendor')->name('admin.destroyVendor');

    //admin for admin
    Route::get('/admin', 'Admin\AdminController@showAdmin')->name('admin.showAdmin');
    Route::get('/admin/create', 'Admin\AdminController@createAdmin')->name('admin.createAdmin');
    Route::post('/admin', 'Admin\AdminController@storeAdmin')->name('admin.storeAdmin');
    Route::get('/admin/edit/{id}', 'Admin\AdminController@editAdmin')->name('admin.editAdmin');
    Route::post('/admin/update/{id}', 'Admin\AdminController@updateAdmin')->name('admin.updateAdmin');
    Route::get('/admin/delete/{id}', 'Admin\AdminController@destroyAdmin')->name('admin.destroyAdmin');
});

//routes for vendors
Route::prefix('vendor')->group(function(){
    Route::get('/', 'Vendor\VendorController@index')->name('vendor.dashboard');
    Route::get('/login', 'Auth\VendorLoginController@showLoginForm')->name('vendor.login');
    Route::post('/login', 'Auth\VendorLoginController@login')->name('vendor.login.submit');
    Route::get('/register', 'Auth\VendorRegisterController@showRegisterForm')->name('vendor.register');
    Route::post('/register', 'Auth\VendorRegisterController@register')->name('vendor.register.submit');
    Route::post('/logout', 'Auth\VendorLoginController@logout')->name('vendor.logout');

    //billboard
    Route::get('/billboard', 'Vendor\VendorBillboardController@showBillboard')->name('vendor.showBillboard');
    Route::get('/billboard/create', 'Vendor\VendorBillboardController@createBillboard')->name('vendor.createBillboard');
    Route::post('/billboard', 'Vendor\VendorBillboardController@storeBillboard')->name('vendor.storeBillboard');
    Route::get('/billboard/edit/{id}', 'Vendor\VendorBillboardController@editBillboard')->name('vendor.editBillboard');
    Route::post('/billboard/update/{id}', 'Vendor\VendorBillboardController@updateBillboard')->name('vendor.updateBillboard');
    Route::get('/billboard/delete/{id}', 'Vendor\VendorBillboardController@destroyBillboard')->name('vendor.destroyBillboard');

    //pesanan
    Route::get('/penyewaan', 'Vendor\VendorPenyewaanController@showPenyewaan')->name('vendor.showPenyewaan');
    Route::get('/penyewaan/edit/{id}', 'Vendor\VendorPenyewaanController@editPenyewaan')->name('vendor.editPenyewaan');
    Route::post('/penyewaan/update/{id}', 'Vendor\VendorPenyewaanController@updatePenyewaan')->name('vendor.updatePenyewaan');
    Route::get('/penyewaan/delete/{id}', 'Vendor\VendorPenyewaanController@destroyPenyewaan')->name('vendor.destroyPenyewaan');

    
});
    //edit profil     
    
Route::group(["middleware" => "auth:vendor"], function() {
    Route::get('/vendor/profiles/{user}', 'Vendor\VendorProfilController@showProfiles')->name('vendor.showProfiles');
    Route::get('/vendor/profiles/edit/{user}', 'Vendor\VendorProfilController@editProfiles')->name('vendor.editProfiles');
    Route::put('/vendor/profiles/update/{user}', 'Vendor\VendorProfilController@updateProfiles')->name('vendor.updateProfiles');
});

Route::group(["middleware" => 'auth'], function() {
    Route::get('/profiles/{user}', 'ProfilController@showProfiles')->name('pelanggan.showProfiles');
    Route::get('/profiles/edit/{user}', 'ProfilController@editProfiles')->name('pelanggan.editProfiles');
    Route::put('/profiles/update/{user}', 'ProfilController@updateProfiles')->name('pelanggan.updateProfiles');
}); 

