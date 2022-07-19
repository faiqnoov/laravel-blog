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
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Faiq Nov',
            'email' => 'faiqnov@gmail.com',
            'password' => bcrypt('12345')
        ]);

        User::create([
            'name' => 'Niken Aul',
            'email' => 'niken@gmail.com',
            'password' => bcrypt('12345')
        ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::create([
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimusnde, nesciunt recusandae aperiam',
            'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequuntur voluptate minima nostrum eaque voluptates accusantium alias. Ducimusnde, nesciunt recusandae aperiam, mollitia, labore vm. Harum blanditiis nulla voluptate provident molestias alias aliquid, incidunt, eos soluta ab eligendi iure excepturi repellendus aliquam adipisci.</p><p>Eligendi alias sint expedita aliquam, et cupiditate architecto distinctio quibusdam dicta ut nisi, ab incidunt soluta unde aliquid, odit vel vero quidem non! Eius excepturi ab molestiae. Nam sit amet a molestiae delectus iste, dignissimos quia, rerum maiores non minima corporis cupiditate facere, ipsam expedita vitae obcaecati voluptatum laudantium eligendi molestias temporibus officiis! Quos quo maxime, sed explicabo recusandae perferendis laboriosam officia laborum quis accusantium debitis sit unde! Voluptatibus quos veritatis possimus?</p><p>Eligendi alias sint expedita aliquam, et cupiditate architecto distinctio quibusstiae. Nam sit amet a molestiae delectus iste, digniriosam officia laborum quis accusantium debitis sit unde! Voluptatibus quos veritatis possimus?</p>',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Kedua',
            'slug' => 'judul-kedua',
            'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimusnde, nesciunt recusandae aperiam',
            'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequuntur voluptate minima nostrum eaque voluptates accusantium alias. Ducimusnde, nesciunt recusandae aperiam, mollitia, labore vm. Harum blanditiis nulla voluptate provident molestias alias aliquid, incidunt, eos soluta ab eligendi iure excepturi repellendus aliquam adipisci.</p><p>Eligendi alias sint expedita aliquam, et cupiditate architecto distinctio quibusdam dicta ut nisi, ab incidunt soluta unde aliquid, odit vel vero quidem non! Eius excepturi ab molestiae. Nam sit amet a molestiae delectus iste, dignissimos quia, rerum maiores non minima corporis cupiditate facere, ipsam expedita vitae obcaecati voluptatum laudantium eligendi molestias temporibus officiis! Quos quo maxime, sed explicabo recusandae perferendis laboriosam officia laborum quis accusantium debitis sit unde! Voluptatibus quos veritatis possimus?</p><p>Eligendi alias sint expedita aliquam, et cupiditate architecto distinctio quibusstiae. Nam sit amet a molestiae delectus iste, digniriosam officia laborum quis accusantium debitis sit unde! Voluptatibus quos veritatis possimus?</p>',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Ketiga',
            'slug' => 'judul-ketiga',
            'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimusnde, nesciunt recusandae aperiam',
            'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequuntur voluptate minima nostrum eaque voluptates accusantium alias. Ducimusnde, nesciunt recusandae aperiam, mollitia, labore vm. Harum blanditiis nulla voluptate provident molestias alias aliquid, incidunt, eos soluta ab eligendi iure excepturi repellendus aliquam adipisci.</p><p>Eligendi alias sint expedita aliquam, et cupiditate architecto distinctio quibusdam dicta ut nisi, ab incidunt soluta unde aliquid, odit vel vero quidem non! Eius excepturi ab molestiae. Nam sit amet a molestiae delectus iste, dignissimos quia, rerum maiores non minima corporis cupiditate facere, ipsam expedita vitae obcaecati voluptatum laudantium eligendi molestias temporibus officiis! Quos quo maxime, sed explicabo recusandae perferendis laboriosam officia laborum quis accusantium debitis sit unde! Voluptatibus quos veritatis possimus?</p><p>Eligendi alias sint expedita aliquam, et cupiditate architecto distinctio quibusstiae. Nam sit amet a molestiae delectus iste, digniriosam officia laborum quis accusantium debitis sit unde! Voluptatibus quos veritatis possimus?</p>',
            'category_id' => 2,
            'user_id' => 2
        ]);
    }
}
