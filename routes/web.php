<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('page.home');
});

Route::get('/product/{id}', function ($id) {
    return view('page.detail-product');
});

Route::get('/signup', function () {
    return view('page.signup');
});

Route::get('/signup1', function () {
    return view('page.signin');
});

Route::get('/signin1', function () {
    return view('page.signin'); // ini halaman login
});

Route::get('/signin', function () {
    return view('page.user-page');
});

Route::get('/signup1', function () {
    return view('page.signup'); // sesuaikan nama file blade
});


Route::get('/signout', function () {
    return view('page.home'); // sesuaikan nama file blade
});

/* DETAIL PRODUCT */
Route::get('/product/{id}', function ($id) {
    return view('page.detail-product', ['id' => $id]);
});

/* ORDER (TANPA LOGIN) */
Route::get('/order/{id}', function ($id) {
    return view('page.order-data', ['id' => $id]);
});

Route::get('/information', function () {
    return view('page.info-invitation');
});

Route::get('/checkout', function () {
    return view('page.checkout');
});
