<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Administrator',
                'email' => 'admin@example.com',
                'password' => bcrypt('Admin.123'),
            ],
            [
                'name' => 'Ahmad Rizki',
                'email' => 'ahmadrizki0704@gmail.com',
                'password' => bcrypt('Rizki.123'),
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
