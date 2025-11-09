<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Admin User' ,
            'email' => 'admin@demo.com',
            'password' => 'admin@ycombinator1',
            'roles' => 'admin',
        ]);

        User::create([
            'name' => 'Editor User',
            'email' => 'editor@demo.com',
            'password' => 'editor@ycombinator1',
            'roles' => 'editor',
        ]);
    }
}
