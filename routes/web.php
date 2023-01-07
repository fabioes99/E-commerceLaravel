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

use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index'] ); //a view que retorna o html da pagina fica nos controllers

Route::get('/events/create', [EventController::class, 'create'] );

Route::get('/contact', [EventController::class, 'contact'] );

