<?php

namespace App\Models;

class Post
{
    static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Fikri Anjani",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta culpa nesciunt quaerat doloribus debitis delectus, sint beatae deleniti. Iure itaque quod rerum illo eligendi veniam suscipit obcaecati laborum? Expedita distinctio impedit maxime error nisi harum vitae tempora voluptate aliquid eos libero labore esse assumenda eius, soluta et tenetur, minima recusandae magnam! Aliquid non officiis quia harum provident autem impedit optio, accusamus totam. Laboriosam, impedit. Dolores quo, ab incidunt, inventore ut recusandae animi neque quae, ipsam alias asperiores minima? Vero, quae."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Meru Naru",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta culpa nesciunt quaerat doloribus debitis delectus, sint beatae deleniti. Iure itaque quod rerum illo eligendi veniam suscipit obcaecati laborum? Expedita distinctio impedit maxime error nisi harum vitae tempora voluptate aliquid eos libero labore esse assumenda eius, soluta et tenetur, minima recusandae magnam! Aliquid non officiis quia harum provident autem impedit optio, accusamus totam. Laboriosam, impedit. Dolores quo, ab incidunt, inventore ut recusandae animi neque quae, ipsam alias asperiores minima? Vero, quae."
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        // $post = [];
        // foreach ($posts as $p) {
        //     if ($p["slug"] === $slug) {
        //         $post = $p;
        //     }
        // }
        return $posts->firstwhere('slug', $slug);
    }
}
