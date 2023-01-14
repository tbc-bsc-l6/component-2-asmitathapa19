<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //admin user
        user::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt ('password'), //password is 'password'
            'user_role' => 1, 
        ]);
        //test user
        user::create([
            'name' => 'Test',
            'email' => 'test@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt ('password'),
            'user_role' => 0, 
        ]);
    }
}
