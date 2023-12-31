<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
            [
                'name' => 'Dedi',
                'username' => 'dedi',
                'email' => 'dedi@email.com',
                'password' => bcrypt('password'),
                'email_verified_at' => now(),
                'remember_token' => Str::random(10),
            ],
            [
                'name' => 'Azmi',
                'username' => 'azmi',
                'email' => 'azmi@email.com',
                'password' => bcrypt('password'),
                'email_verified_at' => now(),
                'remember_token' => Str::random(10),
            ]
        ])->each(function($item) {
            \App\Models\User::create($item);
        });

        \App\Models\User::factory(10)->create();
    }
}
