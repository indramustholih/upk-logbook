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

Route::get('/', 'HomeController@index')->name('home');
Auth::routes();

// laporan
Route::get('/laporan-pelatihan', 'PelaporanPelatihanController@index')->name('laporan-pelatihan.index');
Route::get('/laporan-pelatihan/{id_perangkat_daerah}/{pelatihan}', 'PelaporanPelatihanController@listData')->name('laporan-pelatihan.data');
Route::get('/laporan-pelatihan/view/{nip}/{kode_jabatan}/{kode_opd}/{pelatihan}', 'PelaporanPelatihanController@viewMapping');

Route::group(['middleware' => ['web', 'cekuser:1']], function () {
    // user
    Route::get('/user/data', 'UserController@listData')->name('user.data');
    Route::resource('/user', 'UserController');

    //jabatan
    Route::get('/jabatan/data', 'JabatanKerjaController@listData')->name('jabatan.data');
    Route::resource('/jabatan', 'JabatanKerjaController');

    //kegiatan jabatan
    Route::get('/kegiatan-jabatan/data', 'KegiatanJabatanController@listData')->name('kegiatan-jabatan.data');
    Route::resource('/kegiatan-jabatan', 'KegiatanJabatanController');
    
    //master kegiatan
    Route::get('/master-kegiatan/data', 'MasterKegiatanController@listData')->name('master-kegiatan.data');
    Route::resource('/master-kegiatan', 'MasterKegiatanController');

    //log kegiatan
    Route::get('/log-kegiatan/data', 'LogKegiatanController@listData')->name('log-kegiatan.data');
    Route::get('/log-kegiatan/input', 'LogKegiatanController@inputLogKegiatan')->name('log-kegiatan.input');
    Route::post('/log-kegiatan/input', 'LogKegiatanController@store')->name('log-kegiatan.store');
    Route::resource('/log-kegiatan', 'LogKegiatanController');

});

set_time_limit(0);
