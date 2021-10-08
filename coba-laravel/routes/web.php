<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Fikri Anjani",
        "nickname" => "MeruNaru",
        "image" => "image.jpg"
    ]);
});




Route::get('/blog', function () {
    $blog_posts = [
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

    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

//halaman single post
Route::get('posts/{slug}', function ($slug) {
    $blog_posts = [
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

    $new_post = [];
    foreach ($blog_posts as $post) {
        if ($post["slug"] === $slug) {
            $new_post = $post;
        }
    }


    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});
