<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Profile;  
use App\Models\Creation; 
use App\Models\User;     

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Profile::factory(5)->create();
        Creation::factory(6)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
