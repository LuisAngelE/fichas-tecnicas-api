<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Subcategory;

class SubcategorySeeder extends Seeder
{
    public function run(): void
    {
        // Obtener categorías
        $combustion = Category::where('name', 'Combustión')->first();
        $electric = Category::where('name', 'Eléctricos y nuevas energías')->first();

        $subcategories = [
            // Combustión
            ['category_id' => $combustion->id, 'name' => 'Autobuses'],
            ['category_id' => $combustion->id, 'name' => 'Ligeros y medianos'],
            ['category_id' => $combustion->id, 'name' => 'Pesados'],
            ['category_id' => $combustion->id, 'name' => 'Pick ups & Vanes'],

            // Eléctricos y nuevas energías
            ['category_id' => $electric->id, 'name' => 'Autobuses'],
            ['category_id' => $electric->id, 'name' => 'Ligeros y medianos'],
            ['category_id' => $electric->id, 'name' => 'Pesados'],
            ['category_id' => $electric->id, 'name' => 'Pick up_s & Vanes'],
        ];

        foreach ($subcategories as $sub) {
            Subcategory::create($sub);
        }
    }
}
