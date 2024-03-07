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


// Rotta home
Route::get('/', function () {
    return view('home');
});

// Rotta header
Route::get('/', function () {
    return view('header');
});

// Rotta jumbotrone
Route::get('/', function () {
    return view('jumbotrone');
});

// Rotta main
Route::get('/', function () {
    return view('main');
});

// Rotta footer
Route::get('/', function () {
    return view('footer');
});