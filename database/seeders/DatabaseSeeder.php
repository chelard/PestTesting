<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Blog;
use App\Models\Course;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Course::factory()->create(['title' => 'Course A', 'description'=>'This is course A' ]);
        Course::factory()->create(['title' => 'Course B', 'description'=>'This is course B']);
        Course::factory()->create(['title' => 'Course C', 'description' => 'This is course C' ]);

        Blog::factory()->create(['title' => 'Blog 1', 'body' => 'Blog 1 Body']);
        Blog::factory()->create(['title' => 'Blog 2', 'body' => 'Blog 2 Body']);
        Blog::factory()->create(['title' => 'Blog 3', 'body' => 'Blog 3 Body']);
    }
}
