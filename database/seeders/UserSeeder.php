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
    }
}
