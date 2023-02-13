<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();

        User::create([
                'name' => 'Super Admin',
                'email' => 'superadmin@mail.com',
                'bio' => fake()->paragraph(),
                'phone' => fake()->phoneNumber(),
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
        ]);

        User::create([
            'name' => 'User',
            'email' => 'user@mail.com',
            'email_verified_at' => now(),
            'bio' => fake()->paragraph(),
            'phone' => fake()->phoneNumber(),
            'password' => Hash::make('password'),
    ]);
    }
}
