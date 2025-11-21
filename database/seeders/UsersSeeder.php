<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UsersSeeder extends Seeder
{
    public function run(): void
    {
        $csvPath = database_path('seeders/data/consulta_modificada.csv');

        if (!file_exists($csvPath)) {
            dd("No se encontró el archivo CSV en: " . $csvPath);
        }

        $file = fopen($csvPath, 'r');

        $headers = fgetcsv($file);

        while (($row = fgetcsv($file)) !== false) {
            $record = array_combine($headers, $row);

            User::create([
                'first_name'       => $record['nombre_1'] ?? null,
                'middle_name'      => $record['nombre_2'] ?: null,
                'last_name'        => $record['apellido_paterno'] ?? null,
                'second_last_name' => $record['apellido_materno'] ?? null,
                'email'            => $record['email_corporativo'] !== 'SIN ASIGNAR'
                    ? strtolower($record['email_corporativo'])
                    : null,
                'phone'            => null,
                'employee_number'  => $record['numero_colaborador'] ?? null,
                'password'         => Hash::make('password'),
                'position'       => $record['nombre_puesto'] ?? null,
                'url'       => $record['avatar'] ?? null,
            ]);
        }

        fclose($file);
    }
}
