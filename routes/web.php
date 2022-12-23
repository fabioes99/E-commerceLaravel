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

    $nome = "Fabio";
    return view('welcome', ['nome' => $nome]);
});

Route::get('/contato', function () {
    return view('contato');
});

Route::get('/produto/{id?}', function ($id = null) {
    return view('produto', ['id' => $id]);
});