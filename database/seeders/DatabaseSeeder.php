<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Felix Ruby',
            'username' => 'felixru',
            'email' => 'felix@google.com',
            'password' => bcrypt('password')
        ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Programming',
            'slug' => 'programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet pertama...',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit quae iusto
        //       dolor id laudantium eveniet neque voluptatum temporibus enim aut labore
        //       reprehenderit ex beatae sit consequuntur, fuga accusantium atque possimus
        //       itaque. Nesciunt exercitationem earum odit, inventore suscipit fugit
        //       architecto hic accusamus eum nisi esse cum accusantium. Velit nostrum
        //       recusandae tenetur aliquam, quibusdam assumenda veritatis nesciunt, rem
        //       temporibus quasi expedita totam voluptatem aperiam maiores,</p><p>
        //       blanditiis inventore esse debitis asperiores soluta error! Sapiente iste
        //       dolores beatae nulla est explicabo ab dolorum exercitationem ducimus.
        //       Impedit quisquam iusto optio at et harum ullam, repudiandae magni ad eveniet
        //       amet odio, illum neque iste quam excepturi! Ut unde reprehenderit quaerat
        //       temporibus placeat nemo perspiciatis architecto necessitatibus maiores.
        //       Assumenda blanditiis quam fugit consectetur necessitatibus saepe, aperiam
        //       aliquid.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit quae iusto
        //       dolor id laudantium eveniet neque voluptatum temporibus enim aut labore
        //       reprehenderit ex beatae sit consequuntur, fuga accusantium atque possimus
        //       itaque. Nesciunt exercitationem earum odit, inventore suscipit fugit
        //       architecto hic accusamus eum nisi esse cum accusantium. Velit nostrum
        //       recusandae tenetur aliquam, quibusdam assumenda veritatis nesciunt, rem
        //       temporibus quasi expedita totam voluptatem aperiam maiores,</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
    }
}
