<?php

namespace Database\Seeders;

use App\Models\Subcategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subcategories = [
            /* Asistentes Virtuales */
            [
                'category_id' => 1,
                'name' => 'Altavoz Echo Dot 3',
                'slug' => Str::slug('Altavoz Echo Dot 3'),
                'color' => true
            ],
            [
                'category_id' => 1,
                'name' => 'Altavoz Echo Dot 4',
                'slug' => Str::slug('Altavoz Echo Dot 4'),
                'color' => true
            ],
            [
                'category_id' => 2,
                'name' => 'Foco Inteligente',
                'slug' => Str::slug('Foco Inteligente'),
                
            ],
            [
                'category_id' => 2,
                'name' => 'Interruptores Inteligentes',
                'slug' => Str::slug('Interruptores Inteligentes'),
                'color' => true
            ],
            [
                'category_id' => 2,
                'name' => 'Tomacorrientes Inteligentes',
                'slug' => Str::slug('Tomacorrientes Inteligentes'),
                
            ],
            [
                'category_id' => 2,
                'name' => 'Cintas Led Inteligentes',
                'slug' => Str::slug('Cintas Led Inteligentes'),
                
            ],
            [
                'category_id' => 3,
                'name' => 'Camisetas',
                'slug' => Str::slug('Camisetas'),
                'color' => true,
                'size' => true
            ]

        ];

        foreach ($subcategories as $subcategory) {
                Subcategory::factory(1)->create($subcategory);
        }
    }
}
