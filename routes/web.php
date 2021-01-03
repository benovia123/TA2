<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Imports\RawDataImport;
use Maatwebsite\Excel\Facades\Excel;

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
    return view('import');

});

Route::get('/dashboard', 'DashboardController@index');
Route::get('/dashboard/top-twenty/{year?}', 'DashboardController@toptwenty');

Route::get('/advertiser', 'AdvertiserController@index');

Route::post('/advertiser', 'AdvertiserController@add');
Route::get('/advertiser/{id}/delete', 'AdvertiserController@delete');
Route::get('/advertiser/{id}', 'AdvertiserController@editForm');
Route::post('/advertiser/{id}', 'AdvertiserController@edit');

Route::get('/gita', 'gitaController@index');
Route::get('/adit', 'aditController@index');
Route::get('/visualisasi', 'visualisasiController@index');
Route::get('/ila', 'ilaController@index');
Route::get('/streamgraph', 'StreamgraphController@index');
Route::get('/sankey', 'SankeyController@index');

Route::get('/food', 'FoodController@index');
Route::get('/food/tambah', 'FoodController@tambah');
Route::post('/food/proses', 'FoodController@proses');
Route::get('/food/edit/{id}', 'FoodController@edit');
Route::put('/food/update/{id}', 'FoodController@update');
Route::get('/food/hapus/{id}', 'FoodController@delete');

Route::get('/spending', 'SpendingController@index');
Route::get('/spending/add', 'SpendingController@addForm');
Route::post('/spending/add', 'SpendingController@add');
Route::get('/spending/{id}/delete', 'SpendingController@delete');
Route::get('/spending/{id}', 'SpendingController@editForm');
Route::post('/spending/{id}', 'SpendingController@edit');
Route::get('/import', function(){
    return view('import');
});
Route::post('/import', function(Request $req){
    Excel::import(new RawDataImport, $req->file('import'));
});

Route::get('/test', function () {
    return view('testing');



});

