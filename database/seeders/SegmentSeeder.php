<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Subcategory;
use App\Models\Segment;

class SegmentSeeder extends Seeder
{
    public function run(): void
    {
        // === COMBUSTIÓN ===
        $combustionAutobuses = Subcategory::where('name', 'Autobuses')->whereHas('category', fn($q) => $q->where('name', 'Combustión'))->first();
        $combustionLigeros = Subcategory::where('name', 'Ligeros y medianos')->whereHas('category', fn($q) => $q->where('name', 'Combustión'))->first();
        $combustionPesados = Subcategory::where('name', 'Pesados')->whereHas('category', fn($q) => $q->where('name', 'Combustión'))->first();
        $combustionPickups = Subcategory::where('name', 'Pick ups & Vanes')->whereHas('category', fn($q) => $q->where('name', 'Combustión'))->first();

        // === ELÉCTRICOS ===
        $electricAutobuses = Subcategory::where('name', 'Autobuses')->whereHas('category', fn($q) => $q->where('name', 'Eléctricos y nuevas energías'))->first();
        $electricLigeros = Subcategory::where('name', 'Ligeros y medianos')->whereHas('category', fn($q) => $q->where('name', 'Eléctricos y nuevas energías'))->first();
        $electricPesados = Subcategory::where('name', 'Pesados')->whereHas('category', fn($q) => $q->where('name', 'Eléctricos y nuevas energías'))->first();
        $electricPickups = Subcategory::where('name', 'Pick up_s & Vanes')->whereHas('category', fn($q) => $q->where('name', 'Eléctricos y nuevas energías'))->first();

        $segments = [
            // Combustión → Autobuses
            ['subcategory_id' => $combustionAutobuses->id, 'name' => 'Diésel'],
            ['subcategory_id' => $combustionAutobuses->id, 'name' => 'GNC'],

            // Combustión → Ligeros y medianos
            ['subcategory_id' => $combustionLigeros->id, 'name' => 'Ligeros'],
            ['subcategory_id' => $combustionLigeros->id, 'name' => 'Medianos'],
            ['subcategory_id' => $combustionLigeros->id, 'name' => 'Minitruck'],

            // Combustión → Pesados
            ['subcategory_id' => $combustionPesados->id, 'name' => 'Pesados (vocacionales)'],
            ['subcategory_id' => $combustionPesados->id, 'name' => 'Tractocamiones'],

            // Combustión → Pickups
            ['subcategory_id' => $combustionPickups->id, 'name' => 'HI VAN'],
            ['subcategory_id' => $combustionPickups->id, 'name' => 'Tunland'],
            ['subcategory_id' => $combustionPickups->id, 'name' => 'View CS2'],
            ['subcategory_id' => $combustionPickups->id, 'name' => 'View Grand'],

            // Eléctricos → Autobuses
            ['subcategory_id' => $electricAutobuses->id, 'name' => 'Eléctricos'],
            ['subcategory_id' => $electricAutobuses->id, 'name' => 'Hidrógeno'],

            // Eléctricos → Ligeros
            ['subcategory_id' => $electricLigeros->id, 'name' => 'Ligeros'],
            ['subcategory_id' => $electricLigeros->id, 'name' => 'Medianos'],
            ['subcategory_id' => $electricLigeros->id, 'name' => 'Minitrucks'],

            // Eléctricos → Pesados
            ['subcategory_id' => $electricPesados->id, 'name' => 'Tractocamiones'],
            ['subcategory_id' => $electricPesados->id, 'name' => 'Vocaciones'],

            // Eléctricos → Pickups
            ['subcategory_id' => $electricPickups->id, 'name' => 'HI VAN'],
            ['subcategory_id' => $electricPickups->id, 'name' => 'TUNLAND'],
            ['subcategory_id' => $electricPickups->id, 'name' => 'VIEW'],
            ['subcategory_id' => $electricPickups->id, 'name' => 'VIEW GRAND'],
        ];

        foreach ($segments as $seg) {
            Segment::create($seg);
        }
    }
}
