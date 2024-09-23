<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('client.index');
});

Route::get('/view', function () {
    return view('client.view');
});

Route::get('/book', function () {
    return view('client.book');
});

Route::get('/about_us', function () {
    return view('client.about_us');
});