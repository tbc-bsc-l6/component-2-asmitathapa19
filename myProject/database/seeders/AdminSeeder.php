<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

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
        User::create([
          'name' =>'Admin',
          'email' =>'admin@gmail.com',
          'email_verified_at' => now(),
          'password'=> bcrypt('password'), //password is 'password'
          'is_admin' =>true,
        ]);

        //test user
        User::create([
            'name' =>'Test',
            'email' =>'test@gmail.com',
            'email_verified_at' => now(),
            'password'=> bcrypt('password'), //password is 'password'
            'is_admin' => false,
          ]);
    }
}
