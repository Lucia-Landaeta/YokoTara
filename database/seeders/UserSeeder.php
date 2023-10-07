<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admi = User::create([
            'name'=>'Admin',
            'lastname'=>'Nimda',
            'phone'=>151234567,
            'locality_id'=>'1',
            'email'=>'admin@mail.com',
            'password'=> bcrypt('admin_1234'),
        ]);
        $admi->assignRole('Admin');

        $admi = User::create([
            'name'=>'User',
            'lastname'=>'User',
            'phone'=>151358964,
            'locality_id'=>'5',
            'email'=>'user@mail.com',
            'password'=> bcrypt('user_1234'),
        ]);
        $admi->assignRole('User');

        $admi = User::create([
            'name'=>'Moder',
            'lastname'=>'Moder',
            'phone'=>153358964,
            'locality_id'=>'1',
            'email'=>'moder@mail.com',
            'password'=> bcrypt('moder_1234'),
        ]);
        $admi->assignRole('Moder');
        User::factory(25)->create();
    }
}
