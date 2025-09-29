<?php

namespace Database\Seeders;

use App\Models\Address;
use App\Models\Category;
use App\Models\Post;
use App\Models\Profile;
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

        User::factory()->count(10)->create()->each(function($user){
            $profile = Profile::factory(['user_id' => $user->id])->make();
            $user->profile()->save($profile);
            $profile->address()->save(Address::factory()->make());
        });
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
    }
}
