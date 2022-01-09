<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $categories = [
            [
                'name' => 'Asistentes Virtuales',
                'slug' => Str::slug('Asistentes Virtuales'),
                'icon' => '<i class="fab fa-amazon"></i>'
            ],
            [
                'name' => 'Dispositivos Inteligentes',
                'slug' => Str::slug('Dispositivos Inteligentes'),
                'icon' => '<i class="fas fa-lightbulb"></i>'
            ],
            [
                'name' => 'Moda',
                'slug' => Str::slug('Moda'),
                'icon' => '<i class="fas fa-lightbulb"></i>'
            ]
        ];

        foreach ($categories as $category) {
            $category = Category::factory(1)->create($category)->first();
            
            $brands = Brand::factory(4)->create();

            foreach ($brands as $brand) {
                $brand->categories()->attach($category->id);
            }
        }
    }
}
