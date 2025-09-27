<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about', ['name' => config('app.name')]);
});

Route::get('/home', function () {
    return view('home', ['name' => config('app.name')]);
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/contact', function () {
    return view('contact', ['email' => 'contact@' . strtolower(str_replace(' ', '', config('app.name'))) . '.com']);
});