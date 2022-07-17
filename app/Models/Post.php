<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
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

    public static function all() {
        return self::$blog_posts;
    }

    public static function find($slug) {
        $posts = self::$blog_posts;
        $post = [];
        foreach($posts as $p) {
            if($p["slug"] === $slug) {
                $post = $p;
            }
        }

        return $post;
    }
}