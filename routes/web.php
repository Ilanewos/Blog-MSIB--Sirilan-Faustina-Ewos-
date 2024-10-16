<?php

use App\Http\Controllers\Halo\HaloController;
use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('home');
});


Route::get('/author', function () {
    return view('author');
});


Route::get('/category', function () {
    return view('category');
});


Route::get('/post', function () {
    return view('post');
});

