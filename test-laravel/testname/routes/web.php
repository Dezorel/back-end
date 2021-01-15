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

Route::get('/', function () {       //отслеживание главной страницы
    return view('home');        //на какую страницу кидает при заходе по такому то адресу
});

Route::get('/about', function () {       //отслеживание about страницы
    return view('about');
});

Route::get('/contacts', function () {       //отслеживание contact страницы
    return view('contacts');
});
