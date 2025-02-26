<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/admin', function () {
    return view('index');
});

Route::get('/halaman_login', function()
{
    return view('login',[
        "menu"=>"login"
    ]);
})->name('login');