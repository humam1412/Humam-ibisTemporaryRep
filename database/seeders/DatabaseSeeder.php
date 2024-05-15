<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\posting;
use App\Models\product;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        //  \App\Models\User::factory()->create([
        //      'name' => 'Test User',
        //      'email' => 'test@example.com',
        //  ]);

         User::create([
             'name' => 'humam',
             'email' => 'humam@gmail.com',
             'password' => bcrypt('123')
         ]);
         User::factory(4)->create();

        Category::create([
            'name' => 'artikel',
            'slug' => 'artikel'
        ]);

        Category::create([
            'name' => 'bibit',
            'slug' => 'bibit'
        ]);

        Category::create([
            'name' => 'instalasi',
            'slug' => 'instalasi'
        ]);
        Category::create([
            'name' => 'perlengkapan',
            'slug' => 'perlengkapan'
        ]);
        
        posting::factory(20)->create();

    
        product::factory(20)->create();

        // posting::create([
        //     'title' => 'judul1',
        //     'category_id' => 1,
        //     'slug'  => 'judul-1',
        //     'excerpt' => 'aaaaaaaaaaaaaaaaaaa',
        //     'body'   => 'aaaaaaaaaaaaaaaaaaaaa <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure esse quibusdam odio, praesentium reprehenderit odit dolorem nemo expedita, cum minima a modi impedit eos, dolorum cupiditate voluptatibus explicabo.</p><p style="font-style:italic;"> Fugiat in et dicta ab voluptates commodi quisquam at eius. Quia, odit. Necessitatibus ullam deserunt sit molestias iusto dicta alias explicabo? Officiis!</p>',
        //     'user_id' => 1
        // ]);

        // posting::create([
        //     'title' => 'judul2',
        //     'category_id' => 1,
        //     'slug'  => 'judul-2',
        //     'excerpt' => 'aaaaaaaaaaaaaaaaaaa',
        //     'body'   => 'aaaaaaaaaaaaaaaaaaaaa <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure esse quibusdam odio, praesentium reprehenderit odit dolorem nemo expedita, cum minima a modi impedit eos, dolorum cupiditate voluptatibus explicabo.</p><p style="font-style:italic;"> Fugiat in et dicta ab voluptates commodi quisquam at eius. Quia, odit. Necessitatibus ullam deserunt sit molestias iusto dicta alias explicabo? Officiis!</p>',
        //     'user_id' => 1
        // ]);

        // posting::create([
        //     'title' => 'judul3',
        //     'category_id' => 2,
        //     'slug'  => 'judul-3',
        //     'excerpt' => 'aaaaaaaaaaaaaaaaaaa',
        //     'body'   => 'aaaaaaaaaaaaaaaaaaaaa <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure esse quibusdam odio, praesentium reprehenderit odit dolorem nemo expedita, cum minima a modi impedit eos, dolorum cupiditate voluptatibus explicabo.</p><p style="font-style:italic;"> Fugiat in et dicta ab voluptates commodi quisquam at eius. Quia, odit. Necessitatibus ullam deserunt sit molestias iusto dicta alias explicabo? Officiis!</p>',
        //     'user_id' => 1
        // ]);

        // posting::create([
        //     'title' => 'judul4',
        //     'category_id' => 3,
        //     'slug'  => 'judul-4',
        //     'excerpt' => 'aaaaaaaaaaaaaaaaaaa',
        //     'body'   => 'aaaaaaaaaaaaaaaaaaaaa <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure esse quibusdam odio, praesentium reprehenderit odit dolorem nemo expedita, cum minima a modi impedit eos, dolorum cupiditate voluptatibus explicabo.</p><p style="font-style:italic;"> Fugiat in et dicta ab voluptates commodi quisquam at eius. Quia, odit. Necessitatibus ullam deserunt sit molestias iusto dicta alias explicabo? Officiis!</p>',
        //     'user_id' => 1
        // ]);
    }
}
