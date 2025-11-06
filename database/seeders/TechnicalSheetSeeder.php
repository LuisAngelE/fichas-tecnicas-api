<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CarModel;
use App\Models\TechnicalSheet;

class TechnicalSheetSeeder extends Seeder
{
    public function run(): void
    {
        $sheets = [
            ['model' => 'FOTON D11 (Zafiro - 41)', 'file_name' => 'DS FOTON D11 (Zafiro - 41).pdf'],
            ['model' => 'FOTON D11 Chassis', 'file_name' => 'DS FOTON D11 Chassis.pdf'],
            ['model' => 'Aumark S3 AMT EVI', 'file_name' => 'DS Aumark S3 AMT EVI.pdf'],
            ['model' => 'Aumark S5 MT EVI', 'file_name' => 'DS Aumark S5 MT EVI.pdf'],
            ['model' => 'Auman EST-A EVI (X13)', 'file_name' => 'DS Auman EST-A EVI (X13).pdf'],
            ['model' => 'Tunland G7', 'file_name' => 'DS Tunland G7.pdf'],
            ['model' => 'AUV C12 EV', 'file_name' => 'DS AUV C12 EV.pdf'],
            ['model' => 'Auman EST-EV', 'file_name' => 'DS Auman EST-EV.pdf'],
            ['model' => 'Hi-VAN EV Panel', 'file_name' => 'DS Hi-VAN EV Panel.pdf'],
        ];

        foreach ($sheets as $sheet) {
            $model = CarModel::where('name', $sheet['model'])->first();
            if ($model) {
                TechnicalSheet::create([
                    'model_id' => $model->id,
                    'file_name' => $sheet['file_name'],
                    'file_path' => 'fichas/' . $sheet['file_name'], // ruta simulada
                    'version' => 'v1.0',
                    //'uploaded_by' => 1, // puedes cambiarlo si tienes usuarios
                ]);
            }
        }
    }
}
