<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categories;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Categories::insert(
            [
                [
                    'name' => 'APPLE', 
                    'slug' => 'apple',
                    'description' => 'Electronic gadgets and devices',
                    'image'=> 'https://upload.wikimedia.org/wikipedia/commons/f/fa/Apple_logo_black.svg'
                ],
                [
                    'name' => 'SAMSUNG', 
                    'slug' => 'samsung',
                    'description' => 'Electronic gadgets and devices',
                    'image'=> 'https://upload.wikimedia.org/wikipedia/commons/2/24/Samsung_Logo.svg'
                ],
                [
                    'name' => 'REALME', 
                    'slug' => 'realme',
                    'description' => 'Electronic gadgets and devices',
                    'image'=> 'https://upload.wikimedia.org/wikipedia/commons/e/e6/Realme_logo_SVG.svg'
                ],
                [
                    'name' => 'XIAOMI', 
                    'slug' => 'xiaomi',
                    'description' => 'Electronic gadgets and devices',
                    'image'=> 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/29/Xiaomi_logo.svg/512px-Xiaomi_logo.svg.png',
                ],
                [
                    'name' => 'VIVO',
                    'slug' => 'vivo',
                    'description' => 'Electronic gadgets and devices',
                    'image'=> 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/13/Vivo_logo_2019.svg/330px-Vivo_logo_2019.svg.png'
                ],
            ]
        );
        
    }
}
