<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create a default user (you can customize this as needed)
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password123'),
            'role' => 'Admin',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Generate additional users with default role 'user'
        \App\Models\User::factory(5)->create();
    }
}
