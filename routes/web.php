<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/blog', function () {
    return view('blog', ['title' => 'Blog Page']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About Page']);
});


Route::get('/contact', function () {
    return view('contact', [
        'title' => 'Contact Page',
        'email' => 'contact@' . strtolower(str_replace(' ', '', config('app.name'))) . '.com'
    ]);
});