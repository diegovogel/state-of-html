<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/demo-a', function () {
    return view('demo-a');
});

Route::get('/demo-b', function () {
    return view('demo-b');
});

Route::get('/demo-c', function () {
    return view('demo-c');
});

Route::get('/more', function () {
    return view('more');
});

Route::get('/sandbox', function () {
    return view('sandbox');
});
