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
        User::create([
                'name' => 'Super Admin',
                'email' => 'superadmin@mail.com',
                'email_verified_at' => now(),
                'role' => 'superadmin',
                'password' => Hash::make('password'),
        ]);

        User::create([
            'name' => 'User',
            'email' => 'user@mail.com',
            'email_verified_at' => now(),
            'role' => 'user',
            'password' => Hash::make('password'),
    ]);
    }
}
