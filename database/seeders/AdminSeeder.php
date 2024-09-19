<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::first();

        if (!$user) {
            $user = User::create([
                'name' => 'admin',
                'email' => 'admin@mail.com',
                'password' => Hash::make('123456'),
            ]);
        } else {
            $user->name = 'admin';
            $user->email = 'admin@mail.com';
            $user->password = Hash::make('123456');
            $user->save();
        }

        $user;
    }
}
