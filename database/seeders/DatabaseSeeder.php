<?php

namespace Database\Seeders;

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

        User::factory()->create([
            'name' => 'Aditya Suryo Abimanyu',
            'email' => 'adityaabi5383@gmail.com',
            'password' => bcrypt('1234'),
        ]
    );

    User::factory()->create([
        'name' => 'AdityaAbi',
        'email' => 'cilkubia@gmail.com',
        'password' => bcrypt('4321'),
    ]
);
    }
}
