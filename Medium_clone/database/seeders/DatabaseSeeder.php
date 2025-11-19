<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
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
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'image' => '/user.jpg',
            'bio' => 'Test user very cool & legend bio'
        ]);

        $categories = ['All', 'Technology', 'Sport', 'Science', 'Politics', 'Entertainment'];
        foreach ($categories as $category) {
            Category::create(['name' => $category]);
        };

        // Post::factory(10)->create();
    }
}
