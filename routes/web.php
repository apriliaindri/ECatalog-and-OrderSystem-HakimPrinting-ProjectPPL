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
    return view('page.signin');
});

Route::get('/signin', function () {
    return view('page.user-page');
});

Route::get('/signup1', function () {
    return view('page.signup');
});


Route::get('/signout', function () {
    return view('page.home');
});

Route::get('/product/{id}', function ($id) {
    return view('page.detail-product', ['id' => $id]);
});

Route::get('/order/{id}', function ($id) {
    return view('page.order-data', ['id' => $id]);
});

Route::get('/information', function () {
    return view('page.info-invitation');
});

Route::get('/checkout', function () {
    return view('page.checkout');
});

Route::get('/konfirmasi', function () {
    return view('page.confirm');
});

Route::post('/logoutconfirm', function () {
    Auth::logout();
    return redirect('/');
})->name('logoutconfirm');

Route::get('/user-page', function () {
    return view('page.user-page');
})->name('user-page');

Route::get('/diproses', function () {
    return view('page.processed');
});

Route::get('/dikirim', function () {
    return view('page.shipping');
});

Route::get('/selesai', function () {
  return view('page.history');
});

Route::get('/', function () {
    return view('page.home');
});

Route::post('/logoutprocessed', function () {
    Auth::logout();
    return redirect('/');
})->name('logoutprocessed');

Route::post('/logouthistory', function () {
    Auth::logout();
    return redirect('/');
})->name('logouthistory');
