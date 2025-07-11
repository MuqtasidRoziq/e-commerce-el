<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([
            [ 
                'name' => 'Muhammad Muqtasid Roziq',
                'email' => 'muqtasidofficial@gmail.com',
                'password' => bcrypt('aiman123'),
                'role' => 'admin',
            ],
            [
                'name' => 'Utiya Maylinah',
                'email' => 'utiyamaylinah03@gmail.com',
                'password' => bcrypt('utiya123'),
                'role' => 'user',
            ],
        ]);
    }
}
