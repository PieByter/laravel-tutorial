<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/blog', function () {
    return view('posts', ['title' => 'Blog Page', 'posts' => [
        [
            'id' => 1,
            'title' => 'Judul Artikel Pertama',
            'slug' => 'judul-artikel-pertama',
            'date' => '1 Januari 2024',
            'author' => 'Admin',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.'
        ],
        [
            'id' => 2,
            'title' => 'Judul Artikel Kedua',
            'slug' => 'judul-artikel-kedua',
            'date' => '2 Januari 2024',
            'author' => 'Admin',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.'
        ],
    ]]);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About Page']);
});

Route::get('/posts/{id}', function ($id) {
    $posts = [
        1 => [
            'title' => 'Judul Artikel Pertama',
            'date' => '1 Januari 2024',
            'author' => 'Admin',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.'
        ],
        2 => [
            'title' => 'Judul Artikel Kedua',
            'date' => '2 Januari 2024',
            'author' => 'Admin',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.'
        ],
    ];

    if (!array_key_exists($id, $posts)) {
        abort(404);
    }

    return view('post', [
        'title' => $posts[$id]['title'],
        'post' => $posts[$id]
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        'title' => 'Contact Page',
        'email' => 'contact@' . strtolower(str_replace(' ', '', config('app.name'))) . '.com'
    ]);
});
