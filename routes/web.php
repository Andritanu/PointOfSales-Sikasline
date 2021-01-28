<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('barang','BarangController');
Route::resource('merek','MerekController');
Route::resource('distributor','DistributorController');
Route::resource('transaksi','TransaksiController');
Route::resource('laporan','LaporanController');
Route::resource('laporbrg','LaporbrgController');
Route::put('/bayar/{id}','transaksiController@bayar');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/laporan/export_excel', 'laporanController@export_excel')->name('laporan.excel');
Route::get('/laporbrg/export_excel', 'laporbrgController@export_excel')->name('laporbrg.excel');
