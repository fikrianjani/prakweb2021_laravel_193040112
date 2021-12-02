<?php

namespace App\Models;



class Post
{
    private static $blog_posts = [
        [
            "title" => "Judu Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Fikri",
            "body" =>  "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia 
        voluptas dolore iste corrupti suscipit veniam explicabo quis quia quae distinctio, non ex nul
        la tempora eos ad consequatur cupiditate velit aperiam quos officiis iusto ea, numquam sit. Perferendis
        aliquam repellat veniam quos at voluptate quam, corrupti minus eius! Sint voluptatum rem quae obcaecati 
        nesciunt illum quasi quo similique laborum aspernatur architecto quis, cum porro dolorum expedita magnam.
        Commodi, quasi, maxime animi a ad soluta, mollitia doloribus aliquam sapiente aspernatur quos eum."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Meru",
            "body" =>  "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia 
            voluptas dolore iste corrupti suscipit veniam explicabo quis quia quae distinctio, non ex nul
            la tempora eos ad consequatur cupiditate velit aperiam quos officiis iusto ea, numquam sit. Perferendis
            aliquam repellat veniam quos at voluptate quam, corrupti minus eius! Sint voluptatum rem quae obcaecati 
            ."
        ]

    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
