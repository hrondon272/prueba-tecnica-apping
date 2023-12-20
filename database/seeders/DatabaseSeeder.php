<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Hans Rondón',
            'email' => 'hans@example.com',
            'password' => password_hash("123456", PASSWORD_BCRYPT)
        ]);

        User::create([
            'name' => 'Yeins',
            'email' => 'yeins@example.com',
            'password' => password_hash("123", PASSWORD_BCRYPT)
        ]);
    }
}
