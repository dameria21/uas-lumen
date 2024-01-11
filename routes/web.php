<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/
//router detail_pesanan
$router->get('/detail_pesanan', 'DetailPesananController@index');
$router->get('/detail_pesanan/{id}', 'DetailPesananController@show');
$router->post('/detail_pesanan/create', 'DetailPesananController@store');
$router->put('/detail_pesanan/update/{id}', 'DetailPesananController@update');
$router->delete('/detail_pesanan/delete/{id}', 'DetailPesananController@destroy');

//router migrations
$router->get('/migrations', 'MigrationsController@index');
$router->get('/migrations/{id}', 'MigrationsController@show');
$router->post('/migrations/create', 'MigrationsController@store');
$router->put('/migrations/update/{id}', 'MigrationsController@update');
$router->delete('/migrations/delete/{id}', 'MigrationsController@destroy');

//router pelanggan
$router->get('/pelanggan', 'PelangganController@index');
$router->get('/pelanggan/{id}', 'PelangganController@show');
$router->post('/pelanggan/create', 'PelangganController@store');
$router->put('/pelanggan/update/{id}', 'PelangganController@update');
$router->delete('/pelanggan/delete/{id}', 'PelangganController@destroy');

//router pengiriman
$router->get('/pengiriman', 'PengirimanController@index');
$router->get('/pengiriman/{id}', 'PengirimanController@show');
$router->post('/pengiriman/create', 'PengirimanController@store');
$router->put('/pengiriman/update/{id}', 'PengirimanController@update');
$router->delete('/pengiriman/delete/{id}', 'PengirimanController@destroy');

//router pesanan
$router->get('/pesanan', 'PesananController@index');
$router->get('/pesanan/{id}', 'PesananController@show');
$router->post('/pesanan/create', 'PesananController@store');
$router->put('/pesanan/update/{id}', 'PesananController@update');
$router->delete('/pesanan/delete/{id}', 'PesananController@destroy');

//router produk
$router->get('/produk', 'ProdukController@index');
$router->get('/produk/{id}', 'ProdukController@show');
$router->post('/produk/create', 'produkController@store');
$router->put('/produk/update/{id}', 'ProdukController@update');
$router->delete('/produk/delete/{id}', 'ProdukController@destroy');


$router->get('/', function () use ($router) {
    return $router->app->version();
});

// File: routes/web.php

use App\Http\Controllers\ApiController;

// Penerapan middleware di grup rute
$router->group(['middleware' => 'cors'], function () use ($router) {
    $router->get('/api/detail_pesanan', 'ApiController@getDetailPesanan');
    $router->get('/api/pelanggan', 'ApiController@getPelanggan');
    $router->get('/api/pengiriman', 'ApiController@getPengiriman');
    $router->get('/api/pesanan', 'ApiController@getPesanan');
    $router->get('/api/produk', 'ApiController@getProduk');
});

// atau penerapan middleware langsung pada rute
$router->get('/api/detail_pesanan', ['middleware' => 'cors', 'uses' => 'ApiController@getDetailPesanan']);
$router->get('/api/pelanggan', ['middleware' => 'cors', 'uses' => 'ApiController@getPelanggan']);
$router->get('/api/pengiriman', ['middleware' => 'cors', 'uses' => 'ApiController@getPengiriman']);
$router->get('/api/pesanan', ['middleware' => 'cors', 'uses' => 'ApiController@getPesanan']);
$router->get('/api/produk', ['middleware' => 'cors', 'uses' => 'ApiController@getProduk']);

