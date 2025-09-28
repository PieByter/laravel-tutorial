<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Posts Page', 'posts' => [
        [
            'id' => 1,
            'title' => 'Judul Artikel Pertama',
            'slug' => 'judul-artikel-1',
            'date' => '1 Januari 2024',
            'author' => 'Admin',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.'
        ],
        [
            'id' => 2,
            'title' => 'Judul Artikel Kedua',
            'slug' => 'judul-artikel-2',
            'date' => '2 Januari 2024',
            'author' => 'Admin',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.'
        ],
    ]]);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About Page']);
});

Route::get('/posts/{slug}', function ($slug) {
    $posts = [
        [
            'id' => 1,
            'title' => 'Judul Artikel Pertama',
            'slug' => 'judul-artikel-1',
            'date' => '1 Januari 2024',
            'author' => 'Admin',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.'
        ],
        [
            'id' => 2,
            'title' => 'Judul Artikel Kedua',
            'slug' => 'judul-artikel-2',
            'date' => '2 Januari 2024',
            'author' => 'Admin',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.'
        ],
    ];

    $post = Arr::first($posts, function ($posts) use ($slug) {
        return $posts['slug'] == $slug;
    });

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
