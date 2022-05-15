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
        "name" => "Faiq Novr",
        "email" => "faiqnov@it.student.pens.ac.id",
        "image" => "faiq.jpg"
    ]);
});


Route::get('/blog', function () {
    // simulasi konten blog
    $blog_posts = [
        [
            "title" => "Post Pertama",
            "slug" => "post-pertama",
            "author" => "Faiq Novriadi",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquid neque sequi iusto rerum sapiente pariatur eligendi modi, distinctio laboriosam magni, eos commodi nihil nostrum porro nisi in cumque repudiandae dolore ipsam voluptate inventore iure! Maxime iusto nobis ut molestiae sapiente assumenda magni voluptatum totam nisi nemo voluptate error aliquam quidem necessitatibus illum accusantium, impedit iure rem voluptas incidunt quo dignissimos corrupti. Tenetur, nihil beatae eveniet autem modi ut, quod dolor consequuntur suscipit illum distinctio inventore dicta repellendus, soluta quae deleniti."
        ],
        [
            "title" => "Post Kedua",
            "slug" => "post-kedua",
            "author" => "Jajang Karburator",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquid neque sequi iusto rerum sapiente pariatur eligendi modi, distinctio laboriosam magni, eos commodi nihil nostrum porro nisi in cumque repudiandae dolore ipsam voluptate inventore iure! Maxime iusto nobis ut molestiae sapiente assumenda magni voluptatum totam nisi nemo voluptate error aliquam quidem necessitatibus illum accusantium, impedit iure rem voluptas incidunt quo dignissimos corrupti. Tenetur, nihil beatae eveniet autem modi ut, quod dolor consequuntur suscipit illum distinctio inventore dicta repellendus, soluta quae deleniti."
        ],
    ];

    return view('posts', [
        "title" => "Blog",
        "posts" => $blog_posts
    ]);
});

// single posts
Route::get('/posts/{slug}', function ($slug) {
    // simulasi konten blog
    $blog_posts = [
        [
            "title" => "Post Pertama",
            "slug" => "post-pertama",
            "author" => "Faiq Novriadi",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquid neque sequi iusto rerum sapiente pariatur eligendi modi, distinctio laboriosam magni, eos commodi nihil nostrum porro nisi in cumque repudiandae dolore ipsam voluptate inventore iure! Maxime iusto nobis ut molestiae sapiente assumenda magni voluptatum totam nisi nemo voluptate error aliquam quidem necessitatibus illum accusantium, impedit iure rem voluptas incidunt quo dignissimos corrupti. Tenetur, nihil beatae eveniet autem modi ut, quod dolor consequuntur suscipit illum distinctio inventore dicta repellendus, soluta quae deleniti."
        ],
        [
            "title" => "Post Kedua",
            "slug" => "post-kedua",
            "author" => "Jajang Karburator",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquid neque sequi iusto rerum sapiente pariatur eligendi modi, distinctio laboriosam magni, eos commodi nihil nostrum porro nisi in cumque repudiandae dolore ipsam voluptate inventore iure! Maxime iusto nobis ut molestiae sapiente assumenda magni voluptatum totam nisi nemo voluptate error aliquam quidem necessitatibus illum accusantium, impedit iure rem voluptas incidunt quo dignissimos corrupti. Tenetur, nihil beatae eveniet autem modi ut, quod dolor consequuntur suscipit illum distinctio inventore dicta repellendus, soluta quae deleniti."
        ],
    ];

    $new_post = [];
    foreach($blog_posts as $post) {
        if($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});