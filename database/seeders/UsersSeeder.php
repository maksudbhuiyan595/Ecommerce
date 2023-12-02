<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([

            'first_name'=>'Super',
            'last_name'=>'Admin',
            'email'=>'superadmin@gmail.com',
            'password'=>bcrypt('123456'),
            'role'=>'Super-admin',
            'role_id'=>'1',
            

        ]);
    }
}
