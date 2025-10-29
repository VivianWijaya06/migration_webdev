<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Profile;  
use App\Models\Creation; 
use App\Models\Blog;
use App\Models\User;     

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Profile::factory(5)->create();
        Creation::factory(6)->create();
        Blog::factory(8)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}