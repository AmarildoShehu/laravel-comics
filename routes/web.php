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
})->name('home');

// Rotta header
Route::get('/header', function () {
    return view('header');
})->name('header');

// Rotta jumbotrone
Route::get('/jumbtrone', function () {
    return view('jumbotrone');
})->name('jumbotrone');

// Rotta main
Route::get('/main', function () {
    return view('main');
})->name('main');

// Rotta footer
Route::get('/footer', function () {
    return view('footer');
})->name('footer');