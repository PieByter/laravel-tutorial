<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog Page', 'posts' => Post::all()]);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About Page']);
});

Route::get('/posts/{post:slug}', function (Post $post) {

    // $post = Post::find($id);

    return view('post', [
        'title' => 'Single Post Page',
        'post' => $post
    ]);
});

Route::get('/categories/{category:slug}', function (Category $category) {

    return view('posts', [
        'title' => 'Post By Category : ' . $category->name,
        'posts' => $category->posts
    ]);
});

Route::get('/authors/{user:username}', function (User $user) {

    return view('posts', [
        'title' => $user->posts->count()  . ' Article By ' . $user->name,
        'posts' => $user->posts
    ]);
});


Route::get('/contact', function () {
    return view('contact', [
        'title' => 'Contact Page',
        'email' => 'contact@' . strtolower(str_replace(' ', '', config('app.name'))) . '.com'
    ]);
});