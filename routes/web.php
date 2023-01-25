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

Route::get('/view', function () {
    return view('welcome');
});

Route::get('/main', function () {
    return view('main');
});

Route::get('/c-1','App\Http\Controllers\user@getIndex');

Route::get('/test', function () {
    return ('welcome');
});

Route::get('/test-id/{id}', function ($id) {
    return $id;
});

Route::get('/test-id1/{id?}', function () {
    return ('welcome');
}) -> name('s_ticket');

//{{route('s_ticket','$id')}}
//{{route('s_ticket','$id')}}

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

