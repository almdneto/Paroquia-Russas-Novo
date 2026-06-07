<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::updateOrCreate(
            [
                'email' => 'airtinpvp@gmail.com',
            ],
            [
                'name' => 'Airton',
                'password' => 'm092512',
                'access_level' => 1, // Admin
            ]
        );
    }
}
