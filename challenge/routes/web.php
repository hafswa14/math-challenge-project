<?php

use Illuminate\Support\Facades\Route;

Route::get('/index', function () {
    return view('index');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/Admin_dashboard', function () {
    return view('Admin_dashboard');
});
Route::get('/contact us', function () {
    return view('contact us');
});
Route::get('/Dashboard', function () {
    return view('Dashboard');
});
Route::get('/register', function () {
    return view('register');
});

Route::get('/contact', function () {
    return view('contact');
});