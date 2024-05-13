<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Rendy',
            'email' => 'rendy@gmail.com',
            'role' => 'admin',
            'password' => BCRYPT('12345'),
        ]);

        User::create([
            'name' => 'Dina',
            'email' => 'dina@gmail.com',
            'role' => 'kasir',
            'password' => BCRYPT('54321'),
        ]);
    }
}
