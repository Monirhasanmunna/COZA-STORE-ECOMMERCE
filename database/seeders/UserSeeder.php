<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([

            'role_id' => 1,
            'name'    => 'Munna',
            'slug'    => 'munna',
            'email'   => 'munna@gmail.com',
            'password'=> bcrypt(11111111),

        ]);


        User::insert([

            'role_id' => 2,
            'name'    => 'Sakib',
            'slug'    => 'sakib',
            'email'   => 'sakib@gmail.com',
            'password'=> bcrypt(11111111),

        ]);


        User::insert([

            'role_id' => 3,
            'name'    => 'user',
            'slug'    => 'user',
            'email'   => 'user@gmail.com',
            'password'=> bcrypt(11111111),

        ]);

    }
}
