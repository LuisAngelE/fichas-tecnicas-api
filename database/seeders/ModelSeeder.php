<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Segment;
use App\Models\CarModel;

class ModelSeeder extends Seeder
{
    public function run(): void
    {
        $models = [
            // === Combustión / Autobuses / Diésel ===
            ['segment' => 'Diésel', 'name' => 'FOTON D11 (Zafiro - 41)'],
            ['segment' => 'Diésel', 'name' => 'FOTON D11 Chassis'],
            ['segment' => 'Diésel', 'name' => 'FOTON D9 EVI (ORION FT - 33)'],

            // === Combustión / Ligeros / Ligeros ===
            ['segment' => 'Ligeros', 'name' => 'Aumark S3 AMT EVI'],
            ['segment' => 'Ligeros', 'name' => 'Aumark S5 MT EVI'],

            // === Combustión / Pesados / Tractocamiones ===
            ['segment' => 'Tractocamiones', 'name' => 'Auman EST-A EVI (X13)'],
            ['segment' => 'Tractocamiones', 'name' => 'Auman GTL Euro VI (4X2)'],

            // === Combustión / Pickups / Tunland ===
            ['segment' => 'Tunland', 'name' => 'Tunland G7'],
            ['segment' => 'Tunland', 'name' => 'Tunland V7 GSL 4X2 & 4X4'],

            // === Eléctricos / Autobuses / Eléctricos ===
            ['segment' => 'Eléctricos', 'name' => 'AUV C12 EV'],
            ['segment' => 'Eléctricos', 'name' => 'AUV C10 EV'],

            // === Eléctricos / Pesados / Tractocamiones ===
            ['segment' => 'Tractocamiones', 'name' => 'Auman EST-EV'],

            // === Eléctricos / Pickups / HI VAN ===
            ['segment' => 'HI VAN', 'name' => 'Hi-VAN EV Panel'],
            ['segment' => 'HI VAN', 'name' => 'Hi-VAN EV Pax'],
        ];

        foreach ($models as $data) {
            $segment = Segment::where('name', $data['segment'])->first();
            if ($segment) {
                CarModel::create([
                    'segment_id' => $segment->id,
                    'name' => $data['name'],
                    'description' => 'Modelo ' . $data['name'] . ' perteneciente al segmento ' . $segment->name,
                ]);
            }
        }
    }
}
