<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Posts;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog Page', 'posts' => Posts::all()]);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About Page']);
});

Route::get('/posts/{slug}', function ($slug) {

    $post = Posts::find($slug);

    return view('post', [
        'title' => 'Single Post Page',
        'post' => $post
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        'title' => 'Contact Page',
        'email' => 'contact@' . strtolower(str_replace(' ', '', config('app.name'))) . '.com'
    ]);
});
