<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'user1',
            'email' => 'user1@example.com',
            'password' => Hash::make('123456'),
        ]);

        User::factory()->create([
            'name' => 'user2',
            'email' => 'user2@example.com',
            'password' => Hash::make('123456'),
        ]);

        User::factory()->create([
            'name' => 'user3',
            'email' => 'user3@example.com',
            'password' => Hash::make('123456'),
        ]);

        User::factory()->create([
            'name' => 'user4',
            'email' => 'user4@example.com',
            'password' => Hash::make('123456'),
        ]);
    }
}
