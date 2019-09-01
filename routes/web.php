<?php

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
    return view('auth/login');
});

Route::get('/register', function () {
    return view('auth/register');
});

Auth::routes();

// Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');
Route::get('/admin/users', 'UsersController@index');

Route::get('/menu', 'MenuController@index')->name('menu');
Route::get('/menu/create', 'MenuController@create');
Route::post('/menu/store', 'MenuController@store');
Route::get('/menu/edit/{id}', 'MenuController@edit');
Route::put('/menu/update/{id}', 'MenuController@update')->name('updateMenu');
Route::get('/menu/delete/{id}', 'MenuController@delete');
Route::get('/menu/cari', 'MenuController@cari');

Route::get('/costumer', 'CostumerController@index')->name('costumer');
Route::post('/costumer/store', 'CostumerController@store');
Route::get('/costumer/edit/{id}', 'CostumerController@edit');
Route::put('/costumer/update/{id}', 'CostumerController@update')->name('updateCostumer');
Route::get('/costumer/delete/{id}', 'CostumerController@delete');
Route::get('/costumer/cari', 'CostumerController@cari');


Route::get('/order', 'OrderController@index')->name('order');
Route::post('/order/store', 'OrderController@store');
Route::get('/order/edit/{id}', 'OrderController@edit');
Route::put('/order/update/{id}', 'OrderController@update')->name('UpdateOrder');
Route::get('/order/delete/{id}', 'OrderController@delete');
Route::get('/order/cari', 'OrderController@cari');


route::get('/transaksi', 'TransactionController@index')->name('transaksi');
route::get('/transaksi/edit/{id}', 'TransactionController@edit');
route::put('/transaksi/update/{id}', 'TransactionController@update')->name('UpdateTransaksi');

route::get('/transaksi/export_excel','TransactionController@export_excel');




