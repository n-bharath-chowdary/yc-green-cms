<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RoleUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@ycgreen.test'],
            ['name' => 'Admin User', 'password' => 
            Hash::make('password@123'), 'roles' => 'admin']
        );
        User::updateOrCreate(
            ['email' => 'editor@ycgreen.test'],
            ['name' => 'Editor User', 'password' => 
            Hash::make('password@123'), 'roles' => 'editor']
        );
    }
}
