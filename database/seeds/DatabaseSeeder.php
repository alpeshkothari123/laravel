<?php

use Illuminate\Database\Seeder;
use App\Category;
use App\Blog;

class DatabaseSeeder extends Seeder
{

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(Category::class, 10)->create();
        factory(Blog::class, 10)->create();
    }

}
