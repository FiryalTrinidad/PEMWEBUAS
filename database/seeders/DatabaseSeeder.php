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

        //User::create([
        //    'name' => 'Dzaky Naufal',
        //    'email'=> 'naufaldzaky1210@gmail.com',
        //    'password'=>bcrypt('12345')
        //]);
//
        //User::create([
        //    'name' => 'Firyal Trinidad',
        //    'email'=> 'Firyal1210@gmail.com',
        //    'password'=>bcrypt('12345')
        //]);

        User::factory(3)->create();


        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
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

        //Post::create([
        //    'title' => 'Cara Menggunakan HTML',
        //    'slug' => 'cara-menggunakan-html',
        //    'excerpt'=> '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio labore voluptatum ducimus minus fugiat beatae iusto quia facere dolorum similique',
        //    'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio labore voluptatum ducimus minus fugiat beatae iusto quia facere dolorum similique, consequuntur doloremque vel harum quasi autem tempora veritatis placeat ipsum reprehenderit dolores adipisci fuga earum necessitatibus. Deserunt quis aliquid ipsum aperiam id, debitis, sint at iste sunt accusantium magnam numquam quasi explicabo temporibus minus vel dolores facere harum, pariatur consequuntur. Quo culpa earum architecto veniam nobis a explicabo voluptate obcaecati?</p><p> Nostrum maxime quo, rerum ipsum debitis eum corrupti, minus voluptatem molestiae porro iste numquam ipsa fugiat natus quod voluptates architecto atque expedita labore officia? Eveniet aut blanditiis labore libero fugiat exercitationem molestiae necessitatibus reprehenderit eius dolor ipsum consequatur sit vero tempore minima perferendis veritatis, velit accusamus.</p><p> Fugit accusantium amet tenetur incidunt architecto consequatur facere quis deserunt cumque veritatis harum reprehenderit saepe, nam voluptatem excepturi. Nihil explicabo dolor consequatur quas repellat sed id error sequi aliquid voluptate placeat temporibus optio, tenetur doloribus officia voluptas facere. Iusto aut veritatis doloribus magnam, earum, magni error animi quam ipsam natus aperiam maxime harum ipsa rerum ea asperiores aspernatur quas, repudiandae vel fugiat nostrum. Sint, ab deserunt dolorum similique iure exercitationem, rem velit eligendi praesentium ducimus accusantium non voluptas, sit vel nihil minus libero labore.</p>',
        //    'category_id'=> 1,
        //    'user_id'=> 1
        //]);
//
        //Post::create([
        //    'title' => 'Apa itu Python',
        //    'slug' => 'apa-itu-python',
        //    'excerpt'=> '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio labore voluptatum ducimus minus fugiat beatae iusto quia facere dolorum similique',
        //    'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio labore voluptatum ducimus minus fugiat beatae iusto quia facere dolorum similique, consequuntur doloremque vel harum quasi autem tempora veritatis placeat ipsum reprehenderit dolores adipisci fuga earum necessitatibus. Deserunt quis aliquid ipsum aperiam id, debitis, sint at iste sunt accusantium magnam numquam quasi explicabo temporibus minus vel dolores facere harum, pariatur consequuntur. Quo culpa earum architecto veniam nobis a explicabo voluptate obcaecati?</p><p> Nostrum maxime quo, rerum ipsum debitis eum corrupti, minus voluptatem molestiae porro iste numquam ipsa fugiat natus quod voluptates architecto atque expedita labore officia? Eveniet aut blanditiis labore libero fugiat exercitationem molestiae necessitatibus reprehenderit eius dolor ipsum consequatur sit vero tempore minima perferendis veritatis, velit accusamus.</p><p> Fugit accusantium amet tenetur incidunt architecto consequatur facere quis deserunt cumque veritatis harum reprehenderit saepe, nam voluptatem excepturi. Nihil explicabo dolor consequatur quas repellat sed id error sequi aliquid voluptate placeat temporibus optio, tenetur doloribus officia voluptas facere. Iusto aut veritatis doloribus magnam, earum, magni error animi quam ipsam natus aperiam maxime harum ipsa rerum ea asperiores aspernatur quas, repudiandae vel fugiat nostrum. Sint, ab deserunt dolorum similique iure exercitationem, rem velit eligendi praesentium ducimus accusantium non voluptas, sit vel nihil minus libero labore.</p>',
        //    'category_id'=> 1,
        //    'user_id'=> 2
        //]);
//
        //Post::create([
        //    'title' => 'Kehidu-Punk Duniawi',
        //    'slug' => 'kehiduPunk-duniawi',
        //    'excerpt'=> '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio labore voluptatum ducimus minus fugiat beatae iusto quia facere dolorum similique',
        //    'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio labore voluptatum ducimus minus fugiat beatae iusto quia facere dolorum similique, consequuntur doloremque vel harum quasi autem tempora veritatis placeat ipsum reprehenderit dolores adipisci fuga earum necessitatibus. Deserunt quis aliquid ipsum aperiam id, debitis, sint at iste sunt accusantium magnam numquam quasi explicabo temporibus minus vel dolores facere harum, pariatur consequuntur. Quo culpa earum architecto veniam nobis a explicabo voluptate obcaecati?</p><p> Nostrum maxime quo, rerum ipsum debitis eum corrupti, minus voluptatem molestiae porro iste numquam ipsa fugiat natus quod voluptates architecto atque expedita labore officia? Eveniet aut blanditiis labore libero fugiat exercitationem molestiae necessitatibus reprehenderit eius dolor ipsum consequatur sit vero tempore minima perferendis veritatis, velit accusamus.</p><p> Fugit accusantium amet tenetur incidunt architecto consequatur facere quis deserunt cumque veritatis harum reprehenderit saepe, nam voluptatem excepturi. Nihil explicabo dolor consequatur quas repellat sed id error sequi aliquid voluptate placeat temporibus optio, tenetur doloribus officia voluptas facere. Iusto aut veritatis doloribus magnam, earum, magni error animi quam ipsam natus aperiam maxime harum ipsa rerum ea asperiores aspernatur quas, repudiandae vel fugiat nostrum. Sint, ab deserunt dolorum similique iure exercitationem, rem velit eligendi praesentium ducimus accusantium non voluptas, sit vel nihil minus libero labore.</p>',
        //    'category_id'=> 2,
        //    'user_id'=> 1
        //]);
//
        //Post::create([
        //    'title' => 'Melawan Polisi Anjing',
        //    'slug' => 'melawan-polisi-anjing',
        //    'excerpt'=> '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio labore voluptatum ducimus minus fugiat beatae iusto quia facere dolorum similique',
        //    'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio labore voluptatum ducimus minus fugiat beatae iusto quia facere dolorum similique, consequuntur doloremque vel harum quasi autem tempora veritatis placeat ipsum reprehenderit dolores adipisci fuga earum necessitatibus. Deserunt quis aliquid ipsum aperiam id, debitis, sint at iste sunt accusantium magnam numquam quasi explicabo temporibus minus vel dolores facere harum, pariatur consequuntur. Quo culpa earum architecto veniam nobis a explicabo voluptate obcaecati?</p><p> Nostrum maxime quo, rerum ipsum debitis eum corrupti, minus voluptatem molestiae porro iste numquam ipsa fugiat natus quod voluptates architecto atque expedita labore officia? Eveniet aut blanditiis labore libero fugiat exercitationem molestiae necessitatibus reprehenderit eius dolor ipsum consequatur sit vero tempore minima perferendis veritatis, velit accusamus.</p><p> Fugit accusantium amet tenetur incidunt architecto consequatur facere quis deserunt cumque veritatis harum reprehenderit saepe, nam voluptatem excepturi. Nihil explicabo dolor consequatur quas repellat sed id error sequi aliquid voluptate placeat temporibus optio, tenetur doloribus officia voluptas facere. Iusto aut veritatis doloribus magnam, earum, magni error animi quam ipsam natus aperiam maxime harum ipsa rerum ea asperiores aspernatur quas, repudiandae vel fugiat nostrum. Sint, ab deserunt dolorum similique iure exercitationem, rem velit eligendi praesentium ducimus accusantium non voluptas, sit vel nihil minus libero labore.</p>',
        //    'category_id'=> 2,
        //    'user_id'=> 2
        //]);
    }
}
