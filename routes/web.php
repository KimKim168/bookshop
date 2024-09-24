<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('client.index');
});
Route::get('/web', function () {
    return view('welcome');
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

Route::get('/shop', function () {
    return view('client.shop');
});

Route::get('/kidsbook', function () {
    return view('client.kidsbook');
});