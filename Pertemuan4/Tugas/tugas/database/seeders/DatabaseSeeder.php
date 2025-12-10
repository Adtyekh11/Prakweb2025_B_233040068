<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // // User::factory(10)->create();
        // for ($i = 1; $i < 10; $i++) {
        //     User::create([
        //         'name' => 'User ' . $i,
        //         'username' => 'user' . $i,
        //         'email' => 'user' . $i . '@example.com',
        //         'password' => bcrypt('password'),
        //     ]);
        // }


        //create 5 users
        User::create([
            'name' => 'Aditya',
            'username' => 'adit',
            'email' => 'adit@gmail.com',
            'password' =>('password'),
        ]);
        User::create([
            'name' => 'kiboy',
            'username' => 'kboy',
            'email' => 'kiboy@gmail.com',
            'password' =>('password'),
        ]);
        User::create([
            'name' => 'asep',
            'username' => 'asep',
            'email' => 'asep@gmail.com',
            'password' =>('password'),
        ]);
        User::create([
            'name' => 'budi',
            'username' => 'budi',
            'email' => 'budi@gmail.com',
            'password' =>('password'),
        ]);
        User::create([
            'name' => 'agus',
            'username' => 'agus',
            'email' => 'agus@gmail.com',
            'password' =>('password'),
        ]);


        //create 2 category
        Category::create([
            'name' => 'Informatika',
        ]);
        Category::create([
            'name' => 'Intelegensi Buatan',
        ]);


       // create 10 posts
       \App\Models\Post::factory(10)->recycle(User::all())->recycle(Category::all())->create(); 
    }
}
