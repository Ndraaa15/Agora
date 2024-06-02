<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Admin',
                'username' => 'admin',
                'email' => 'admin@admin.com',
                'phone' => '000000000000',
                'password' => Hash::make('admin'),
                'profile_picture' => 'assets/images/pp.png',
                'is_admin' => true,
            ],
            [
                'name' => ' Gede Indra Adi Brata',
                'username' => 'cupz',
                'email' => 'indrabrata599@gmail.com',
                'phone' => '111111111111',
                'password' => Hash::make('indra'),
                'profile_picture' => 'assets/images/pp.png',
                'is_admin' => false,
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
