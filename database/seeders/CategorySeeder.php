<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            ['name' => 'Combustión', 'description' => 'Vehículos con motores de combustión interna.'],
            ['name' => 'Eléctricos y nuevas energías', 'description' => 'Vehículos eléctricos, híbridos y de hidrógeno.'],
        ];

        foreach ($categories as $cat) {
            Category::create($cat);
        }
    }
}
