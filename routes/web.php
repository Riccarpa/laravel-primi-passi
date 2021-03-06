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

    $data=['home','news','info','faqs'];
    

    return view('home', ['data'=> $data]);
})->name('home');

Route::get('/news', function () {

    
    

    return view('news');
})->name('news');

Route::get('/info', function () {

    
    

    return view('info');
})->name('info');

Route::get('/faqs', function () {

    
    

    return view('faqs');
})->name('faqs');