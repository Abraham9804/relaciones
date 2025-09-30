<?php

namespace Database\Seeders;

use App\Models\Address;
use App\Models\Category;
use App\Models\Course;
use App\Models\Lesson;
use App\Models\Post;
use App\Models\Profile;
use App\Models\Section;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()
        ->count(10)
        ->has(
            Profile::factory()->has(
                Address::factory()
            )
        )
        ->create();
        Category::create([
            'name' => 'Tech'
        ]);
        Category::create([
            'name' => 'Health'
        ]);
        Category::create([
            'name' => 'Travel'
        ]);
        Post::factory()->count(15)->create();

        Course::factory()
        ->count(5)
        ->has(
            Section::factory()
            ->count(3)
            ->has(
                Lesson::factory()
                ->count(5)
            )
        )->create();
    }
}
