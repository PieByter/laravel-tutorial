<?php

namespace App\Models;

use Illuminate\Support\Arr;


class Posts
{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'title' => 'Judul Artikel Pertama',
                'slug' => 'judul-artikel-1',
                'date' => '1 Januari 2024',
                'author' => 'Admin',
                'body' => '        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, suscipit autem velit molestias in laborum quo consequatur quidem fugit ratione enim illum architecto ad exercitationem, quis recusandae aspernatur mollitia tenetur nostrum! Libero voluptatum unde aut corrupti nulla quaerat provident est eligendi, quidem quisquam minima dicta eaque in. Esse magni voluptates veritatis officia dicta quis non necessitatibus sapiente ratione. Officiis nobis voluptates voluptatem facilis velit porro explicabo. Vero aliquid obcaecati illum dolores error asperiores sequi. Perferendis harum itaque soluta, molestias possimus incidunt debitis reprehenderit. Facilis labore aspernatur laudantium excepturi enim temporibus, necessitatibus consectetur. Maxime praesentium, eius obcaecati architecto magni accusamus quae.'
            ],
            [
                'id' => 2,
                'title' => 'Judul Artikel Kedua',
                'slug' => 'judul-artikel-2',
                'date' => '2 Januari 2024',
                'author' => 'Admin',
                'body' => '        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, suscipit autem velit molestias in laborum quo consequatur quidem fugit ratione enim illum architecto ad exercitationem, quis recusandae aspernatur mollitia tenetur nostrum! Libero voluptatum unde aut corrupti nulla quaerat provident est eligendi, quidem quisquam minima dicta eaque in. Esse magni voluptates veritatis officia dicta quis non necessitatibus sapiente ratione. Officiis nobis voluptates voluptatem facilis velit porro explicabo. Vero aliquid obcaecati illum dolores error asperiores sequi. Perferendis harum itaque soluta, molestias possimus incidunt debitis reprehenderit. Facilis labore aspernatur laudantium excepturi enim temporibus, necessitatibus consectetur. Maxime praesentium, eius obcaecati architecto magni accusamus quae.'
            ],
        ];
    }

    // public static function find($slug)
    // {
    //     return Arr::first(self::all(), function ($post) use ($slug) {
    //         return $post['slug'] == $slug;
    //     });
    // }
    public static function find($slug): array
    {
        $post = Arr::first(static::all(), fn($post) => $post['slug'] == $slug);

        if (!$post) {
            abort(404);
        }

        return $post;
    }
}
