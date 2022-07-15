<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::insert([

            'name' => 'Admin',
            'slug' => 'admin',

        ]);


        Role::insert([

            'name' => 'Author',
            'slug' => 'author',

        ]);


        Role::insert([

            'name' => 'User',
            'slug' => 'user',

        ]);
    }
}
