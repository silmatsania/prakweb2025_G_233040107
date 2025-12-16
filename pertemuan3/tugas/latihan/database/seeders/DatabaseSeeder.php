<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 5 Users
        User::factory(5)->create();

        // 2 Categories
        Category::factory()->create(['name' => 'Technology']);
        Category::factory()->create(['name' => 'Education']);

        // 10 Posts
        Post::factory(10)->create();
    }
}
