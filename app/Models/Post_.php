<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post
{
    private static array $blogPost = [
        [
            'title' => 'Judul Post Pertama',
            'slug' => 'judul-post-pertama',
            'author' => 'Felix Ruby',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut dolores magni, ea nobis nihil laudantium consectetur nemo repellat ab quos dolor earum deleniti natus fugit esse eos ipsum doloremque eius minima fugiat illo quod. Qui, molestias ad. Magni aliquid dolor nihil necessitatibus odit vitae reprehenderit quae aperiam quisquam ullam perferendis nemo ad voluptatibus qui iusto eum praesentium, ipsum aspernatur, quidem velit? Dolorem accusamus praesentium perferendis aut obcaecati natus vel! Fuga non corporis numquam illo dolorem voluptatem in reprehenderit cumque nobis!',
        ],
        [
            'title' => 'Judul Post Kedua',
            'slug' => 'judul-post-kedua',
            'author' => 'Liam Cole',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis veniam necessitatibus nulla illum! Modi dolore eum magnam rem perspiciatis, quos sequi cumque voluptatibus enim fugiat eaque sit sint, nobis, corrupti adipisci aut quae veniam doloremque similique dignissimos labore velit debitis. Nostrum aliquam, voluptatem harum unde pariatur corrupti cupiditate distinctio velit blanditiis sapiente, nemo neque excepturi assumenda perspiciatis quas fugit iste maiores recusandae a nisi ad. Esse, perspiciatis. Quisquam aut et nulla, eos facilis iure perspiciatis optio odio tempora ipsa sequi itaque expedita asperiores, laboriosam delectus sapiente quia corporis ducimus sed quo debitis nesciunt sit! Facere deserunt molestiae rerum eos obcaecati.',
        ],
    ];

    public static function all()
    {
        return collect(self::$blogPost);
    }

    public static function find(string $slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
