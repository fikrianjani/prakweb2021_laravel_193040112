<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


        // User::create([
        //     'name' => 'Fikri Anjani',
        //     'email' => 'fikrianjani@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Meru Naru',
        //     'email' => 'merunaru@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quae consectetur, minima sit alias ea aperiam?',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quae consectetur, minima sit alias ea aperiam? Repellat animi iure delectus consequatur facere eaque, nisi autem, soluta molestias natus dignissimos molestiae corporis nam? Esse, sunt id! Recusandae obcaecati doloribus maiores cum dignissimos possimus sapiente dolorum, deleniti soluta quae quod unde ullam deserunt sed ex voluptas a veritatis! At exercitationem vitae deserunt repudiandae aperiam, aliquam quidem iure nesciunt, dolore, error aliquid sequi! Dolorem ipsam quas cumque provident in illo quisquam, eveniet veritatis deserunt suscipit rem quis, inventore quos molestias accusantium reiciendis eius voluptatem sint saepe dolor soluta consectetur dignissimos totam? Fuga, nihil accusamus!',
        //     'category_id' => 1,
        //     'user_id' => 1

        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quae consectetur, minima sit alias ea aperiam?',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quae consectetur, minima sit alias ea aperiam? Repellat animi iure delectus consequatur facere eaque, nisi autem, soluta molestias natus dignissimos molestiae corporis nam? Esse, sunt id! Recusandae obcaecati doloribus maiores cum dignissimos possimus sapiente dolorum, deleniti soluta quae quod unde ullam deserunt sed ex voluptas a veritatis! At exercitationem vitae deserunt repudiandae aperiam, aliquam quidem iure nesciunt, dolore, error aliquid sequi! Dolorem ipsam quas cumque provident in illo quisquam, eveniet veritatis deserunt suscipit rem quis, inventore quos molestias accusantium reiciendis eius voluptatem sint saepe dolor soluta consectetur dignissimos totam? Fuga, nihil accusamus!',
        //     'category_id' => 1,
        //     'user_id' => 2

        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quae consectetur, minima sit alias ea aperiam?',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quae consectetur, minima sit alias ea aperiam? Repellat animi iure delectus consequatur facere eaque, nisi autem, soluta molestias natus dignissimos molestiae corporis nam? Esse, sunt id! Recusandae obcaecati doloribus maiores cum dignissimos possimus sapiente dolorum, deleniti soluta quae quod unde ullam deserunt sed ex voluptas a veritatis! At exercitationem vitae deserunt repudiandae aperiam, aliquam quidem iure nesciunt, dolore, error aliquid sequi! Dolorem ipsam quas cumque provident in illo quisquam, eveniet veritatis deserunt suscipit rem quis, inventore quos molestias accusantium reiciendis eius voluptatem sint saepe dolor soluta consectetur dignissimos totam? Fuga, nihil accusamus!',
        //     'category_id' => 2,
        //     'user_id' => 1

        // ]);
    }
}
