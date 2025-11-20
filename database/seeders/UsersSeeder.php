<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UsersSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'first_name' => 'RAUL',
            'middle_name' => 'FABIAN',
            'last_name' => 'DIAZ',
            'second_last_name' => 'GUIA',
            'email' => 'fabian.diaz@ldrsolutions.com.mx',
            'phone' => null,
            'employee_number' => '190002',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'ISAIAS',
            'middle_name' => null,
            'last_name' => 'TRIGUEROS',
            'second_last_name' => 'SALAS',
            'email' => 'isaias.trigueros@ldrsolutions.com.mx',
            'phone' => null,
            'employee_number' => '190004',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'EMMANUEL',
            'middle_name' => null,
            'last_name' => 'PEDROZA',
            'second_last_name' => 'ROMO',
            'email' => null,
            'phone' => null,
            'employee_number' => '190005',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'CANDI',
            'middle_name' => 'ROCIO',
            'last_name' => 'JAIMES',
            'second_last_name' => 'HERNANDEZ',
            'email' => 'candi.jaimes@ldrsolutions.com.mx',
            'phone' => null,
            'employee_number' => '190006',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'LILIANA',
            'middle_name' => null,
            'last_name' => 'PEREZ',
            'second_last_name' => 'MIRANDA',
            'email' => null,
            'phone' => null,
            'employee_number' => '190007',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'CECILIA',
            'middle_name' => 'MARIA CONCEPCION',
            'last_name' => 'CUELLAR',
            'second_last_name' => 'MARTINEZ',
            'email' => null,
            'phone' => null,
            'employee_number' => '190008',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'ALEJANDRO',
            'middle_name' => null,
            'last_name' => 'PADILLA',
            'second_last_name' => 'VALERIO',
            'email' => 'alejandro.padilla@ldrsolutions.com.mx',
            'phone' => null,
            'employee_number' => '190009',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JORGE',
            'middle_name' => 'ADRIAN',
            'last_name' => 'ARAUJO',
            'second_last_name' => 'VALENCIA',
            'email' => 'adrian.araujo@ldrsolutions.com.mx',
            'phone' => null,
            'employee_number' => '190010',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JOSE',
            'middle_name' => 'MANUEL',
            'last_name' => 'ARMENTA',
            'second_last_name' => 'RODRIGUEZ',
            'email' => 'jose.armenta@ldrsolutions.com.mx',
            'phone' => null,
            'employee_number' => '190011',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'EDUARDO',
            'middle_name' => null,
            'last_name' => 'RODRIGUEZ',
            'second_last_name' => 'RODRIGUEZ',
            'email' => null,
            'phone' => null,
            'employee_number' => '190012',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JOSE',
            'middle_name' => 'SALVADOR',
            'last_name' => 'CORDOVA',
            'second_last_name' => 'MALDONADO',
            'email' => null,
            'phone' => null,
            'employee_number' => '190013',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'GERARDO',
            'middle_name' => null,
            'last_name' => 'AGUILERA',
            'second_last_name' => 'LOPEZ',
            'email' => null,
            'phone' => null,
            'employee_number' => '190014',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'SANDRA',
            'middle_name' => 'FABIOLA',
            'last_name' => 'LOPEZ',
            'second_last_name' => 'ATILANO',
            'email' => 'juridico2@ldrsolutions.com.mx',
            'phone' => '3339527936',
            'employee_number' => '190016',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'ALFREDO',
            'middle_name' => null,
            'last_name' => 'ROSAS',
            'second_last_name' => 'MENDEZ',
            'email' => 'alfredo.rosas@ldrsolutions.com.mx',
            'phone' => null,
            'employee_number' => '200017',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'HECTOR',
            'middle_name' => 'HUGO',
            'last_name' => 'GARCIA',
            'second_last_name' => 'GARCIA',
            'email' => null,
            'phone' => null,
            'employee_number' => '200019',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'RICARDO',
            'middle_name' => null,
            'last_name' => 'MESA',
            'second_last_name' => 'VALLARDO',
            'email' => 'ricardo.mesa@ldrsolutions.com.mx',
            'phone' => null,
            'employee_number' => '200020',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'FERNANDO',
            'middle_name' => null,
            'last_name' => 'ROBLEDO',
            'second_last_name' => 'NOVOA',
            'email' => 'fernando.robledo@ldrsolutions.com.mx',
            'phone' => null,
            'employee_number' => '200021',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JOSE',
            'middle_name' => 'ALFREDO',
            'last_name' => 'RAMOS',
            'second_last_name' => 'BARRAGAN',
            'email' => null,
            'phone' => null,
            'employee_number' => '200022',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'NADIA',
            'middle_name' => 'OFELIA',
            'last_name' => 'BOTELLO',
            'second_last_name' => 'MENDOZA',
            'email' => 'administracion@ldrsolutions.com.mx',
            'phone' => null,
            'employee_number' => '200024',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'EPIFANIO',
            'middle_name' => null,
            'last_name' => 'RIOS',
            'second_last_name' => 'MORALES',
            'email' => null,
            'phone' => '4747490517',
            'employee_number' => '200025',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'EDGAR',
            'middle_name' => 'FEDERICO',
            'last_name' => 'FERNANDEZ',
            'second_last_name' => 'GUTIERREZ',
            'email' => 'edgar.fernandez@ldrsolutions.com.mx',
            'phone' => null,
            'employee_number' => '200026',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'EDUARDO',
            'middle_name' => 'JOAQUIN',
            'last_name' => 'GONZALEZ',
            'second_last_name' => 'RODRIGUEZ',
            'email' => 'eduardo.gonzalez@ldrsolutions.com.mx',
            'phone' => null,
            'employee_number' => '210027',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'ANDRES',
            'middle_name' => 'URIEL',
            'last_name' => 'ARENAS',
            'second_last_name' => 'GONZALEZ',
            'email' => 'soportejuridico@ldrsolutions.com.mx',
            'phone' => null,
            'employee_number' => '210028',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'SANTOS',
            'middle_name' => null,
            'last_name' => 'LOPEZ',
            'second_last_name' => 'GOMEZ',
            'email' => 'santos.lopez@ldrsolutions.com.mx',
            'phone' => null,
            'employee_number' => '210029',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'MIREYA',
            'middle_name' => null,
            'last_name' => 'RESENDIZ',
            'second_last_name' => 'ZERMEÑO',
            'email' => 'mireya.resendiz@ldrsolutions.com.mx',
            'phone' => null,
            'employee_number' => '210031',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'LUIS',
            'middle_name' => 'ENRIQUE',
            'last_name' => 'PLAZA',
            'second_last_name' => 'GUTIERREZ',
            'email' => 'luis.plaza@ldrsolutions.com.mx',
            'phone' => null,
            'employee_number' => '210032',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'VICTOR',
            'middle_name' => 'AUGUSTO',
            'last_name' => 'OLIVO',
            'second_last_name' => 'VAZQUEZ',
            'email' => 'victor.olivo@ldrsolutions.com.mx',
            'phone' => null,
            'employee_number' => '210033',
            'password' => Hash::make('password'),
            'user_type' => 1,
        ]);

        User::create([
            'first_name' => 'CESAR',
            'middle_name' => 'FERNANDO',
            'last_name' => 'AVILA',
            'second_last_name' => 'SANCHEZ',
            'email' => 'fernandoavila@ldrsolutions.com.mx',
            'phone' => null,
            'employee_number' => '210034',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'ANDREA',
            'middle_name' => null,
            'last_name' => 'GUZMAN',
            'second_last_name' => 'ROJAS',
            'email' => 'andreaguzman@ldrsolutions.com.mx',
            'phone' => null,
            'employee_number' => '210035',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'DANIEL',
            'middle_name' => null,
            'last_name' => 'ANDRADE',
            'second_last_name' => 'MENDEZ',
            'email' => 'daniel.andrade@ldrsolutions.com.mx',
            'phone' => null,
            'employee_number' => '210036',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JOSE',
            'middle_name' => 'FRANCISCO',
            'last_name' => 'CHAVEZ',
            'second_last_name' => 'RIVERA',
            'email' => 'francisco.chavez@ldrsolutions.com.mx',
            'phone' => null,
            'employee_number' => '220039',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'MAURICIO',
            'middle_name' => 'ABEL',
            'last_name' => 'PERAZA',
            'second_last_name' => 'VIVEROS',
            'email' => 'mauricio.peraza@ldrsolutions.com.mx',
            'phone' => null,
            'employee_number' => '220040',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'MARISOL',
            'middle_name' => null,
            'last_name' => 'DELGADO',
            'second_last_name' => 'MARTINEZ',
            'email' => 'marisol.delgado@ldrsolutions.com.mx',
            'phone' => null,
            'employee_number' => '220041',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'ADRIANA',
            'middle_name' => 'GUADALUPE',
            'last_name' => 'MARTINEZ',
            'second_last_name' => 'SUAREZ',
            'email' => 'almacen.general@ldrsolutions.com.mx',
            'phone' => null,
            'employee_number' => '220044',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'LUIS',
            'middle_name' => 'TIBURCIO',
            'last_name' => 'RODRIGUEZ',
            'second_last_name' => 'LOPEZ',
            'email' => null,
            'phone' => null,
            'employee_number' => '220045',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'CRISTOPHER',
            'middle_name' => 'GREGORIO',
            'last_name' => 'ROSALES',
            'second_last_name' => 'XICOTENCATL',
            'email' => 'cristopher.rosales@ldrsolutions.com.mx',
            'phone' => '5526916191',
            'employee_number' => '220047',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'NORA',
            'middle_name' => 'ADRIANA',
            'last_name' => 'SEGURA',
            'second_last_name' => 'FAVILA',
            'email' => 'nora.segura@ldrsolutions.com.mx',
            'phone' => null,
            'employee_number' => '220048',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'RODRIGO',
            'middle_name' => null,
            'last_name' => 'GARCIA',
            'second_last_name' => 'VARGAS',
            'email' => 'rodrigo.garcia@ldrsolutions.com.mx',
            'phone' => null,
            'employee_number' => '220049',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'VALERIA',
            'middle_name' => 'WENDOLINE',
            'last_name' => 'CADENA',
            'second_last_name' => 'VALLE',
            'email' => null,
            'phone' => null,
            'employee_number' => '220050',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'FRANCISCO',
            'middle_name' => null,
            'last_name' => 'MEZA',
            'second_last_name' => 'RODRIGUEZ',
            'email' => 'francisco.meza@ldrsolutions.com.mx',
            'phone' => null,
            'employee_number' => '220052',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'RODRIGO',
            'middle_name' => null,
            'last_name' => 'TELLEZ',
            'second_last_name' => 'RAMIREZ',
            'email' => 'rodrigo.tellez@ldrsolutions.com.mx',
            'phone' => null,
            'employee_number' => '220053',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'LUZ',
            'middle_name' => 'ADRIANA',
            'last_name' => 'MARTINEZ',
            'second_last_name' => 'MARTINEZ',
            'email' => null,
            'phone' => null,
            'employee_number' => '220054',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JORGE',
            'middle_name' => 'ALFREDO',
            'last_name' => 'ENRIQUEZ',
            'second_last_name' => 'PADILLA',
            'email' => null,
            'phone' => null,
            'employee_number' => '220055',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JAVIER',
            'middle_name' => null,
            'last_name' => 'CERRITOS',
            'second_last_name' => 'LIRA',
            'email' => 'javier.cerritos@ldrsolutions.com.mx',
            'phone' => null,
            'employee_number' => '220056',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JORGE',
            'middle_name' => null,
            'last_name' => 'NUÑEZ',
            'second_last_name' => 'ALCALA',
            'email' => null,
            'phone' => null,
            'employee_number' => '220057',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JESUS',
            'middle_name' => 'HABACUC',
            'last_name' => 'PIMENTEL',
            'second_last_name' => 'MARIN',
            'email' => 'jesus.pimentel@ldrsolutions.com.mx',
            'phone' => null,
            'employee_number' => '220059',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'GISELLE',
            'middle_name' => null,
            'last_name' => 'CRUZ',
            'second_last_name' => 'SALMORAN',
            'email' => 'giselle.cruz@ldrsolutions.com.mx',
            'phone' => null,
            'employee_number' => '220060',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'GONZALO',
            'middle_name' => null,
            'last_name' => 'ORTEGA',
            'second_last_name' => 'DE LA CRUZ',
            'email' => null,
            'phone' => null,
            'employee_number' => '220062',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'LUZ',
            'middle_name' => 'ALBERTO',
            'last_name' => 'AGUIÑAGA',
            'second_last_name' => 'ABUNDIS',
            'email' => null,
            'phone' => null,
            'employee_number' => '220063',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'MANUEL',
            'middle_name' => 'GUSTAVO',
            'last_name' => 'GAMAS',
            'second_last_name' => 'DAVILA',
            'email' => 'manuel.gamas@ldrsolutions.com.mx',
            'phone' => null,
            'employee_number' => '220065',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'BRENDA',
            'middle_name' => 'EDITH',
            'last_name' => 'JUAREZ',
            'second_last_name' => 'LOPEZ',
            'email' => 'brenda.juarez@ldrsolutions.com.mx',
            'phone' => null,
            'employee_number' => '220066',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'GUILLERMO',
            'middle_name' => null,
            'last_name' => 'DAMIAN',
            'second_last_name' => 'RUIZ',
            'email' => null,
            'phone' => '4741276709',
            'employee_number' => '220068',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'ROBERTO',
            'middle_name' => 'ALEJANDRO',
            'last_name' => 'TALAVERA',
            'second_last_name' => 'MARTINEZ',
            'email' => 'roberto.talavera@ldrsolutions.com.mx',
            'phone' => null,
            'employee_number' => '220069',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'ARMANDO',
            'middle_name' => 'NEFTALI',
            'last_name' => 'NUÑEZ',
            'second_last_name' => 'MACIAS',
            'email' => null,
            'phone' => null,
            'employee_number' => '220070',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'KARLA',
            'middle_name' => 'LETICIA',
            'last_name' => 'AZUA',
            'second_last_name' => 'MARTINEZ',
            'email' => 'administracionpostventa@ldrsolutions.com.mx',
            'phone' => null,
            'employee_number' => '220071',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JOSE',
            'middle_name' => 'GUADALUPE',
            'last_name' => 'LOPEZ',
            'second_last_name' => 'MENDEZ',
            'email' => null,
            'phone' => null,
            'employee_number' => '220073',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'REYES',
            'middle_name' => 'GUADALUPE',
            'last_name' => 'VARGAS',
            'second_last_name' => 'GONZALEZ',
            'email' => 'reyes.vargas@ldrsolutions.com.mx',
            'phone' => null,
            'employee_number' => '220074',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JOSE',
            'middle_name' => 'GUADALUPE',
            'last_name' => 'SERRANO',
            'second_last_name' => 'PARTIDA',
            'email' => 'jose.serrano@ldrsolutions.com.mx',
            'phone' => '474 736 34',
            'employee_number' => '220076',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JORGE',
            'middle_name' => 'LUIS',
            'last_name' => 'MOLINA',
            'second_last_name' => 'ESPINOSA',
            'email' => null,
            'phone' => '-',
            'employee_number' => '220077',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'ALEJANDRO',
            'middle_name' => null,
            'last_name' => 'GALLARDO',
            'second_last_name' => 'PIÑA',
            'email' => null,
            'phone' => '-',
            'employee_number' => '220078',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'EFRAIN',
            'middle_name' => null,
            'last_name' => 'ESCOTO',
            'second_last_name' => 'RENTERIA',
            'email' => 'efrain.escoto@ldrsolutions.com.mx',
            'phone' => '-',
            'employee_number' => '220079',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'LUIS',
            'middle_name' => 'ARTURO',
            'last_name' => 'GONZALEZ',
            'second_last_name' => 'LOPEZ',
            'email' => null,
            'phone' => '0',
            'employee_number' => '220080',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'NANCY',
            'middle_name' => 'PAMELA',
            'last_name' => 'TOVAR',
            'second_last_name' => 'ORTIZ',
            'email' => 'pamela.tovar@ldrsolutions.com.mx',
            'phone' => null,
            'employee_number' => '220081',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JORGE',
            'middle_name' => 'EFRAIN',
            'last_name' => 'NUÑEZ',
            'second_last_name' => 'MACIAS',
            'email' => null,
            'phone' => null,
            'employee_number' => '220083',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'ANGELA',
            'middle_name' => 'JANETH',
            'last_name' => 'PEREZ',
            'second_last_name' => 'BECERRA',
            'email' => null,
            'phone' => '-',
            'employee_number' => '220086',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'BRENDA',
            'middle_name' => 'PAOLA',
            'last_name' => 'LOPEZ',
            'second_last_name' => 'ATILANO',
            'email' => 'compras3@ldrsolutions.com.mx',
            'phone' => '4741136683',
            'employee_number' => '220087',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'HECTOR',
            'middle_name' => 'HUGO',
            'last_name' => 'SANCHEZ',
            'second_last_name' => 'SANCHEZ',
            'email' => null,
            'phone' => '-',
            'employee_number' => '220089',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'CESAR',
            'middle_name' => null,
            'last_name' => 'MORENO',
            'second_last_name' => 'CALVILLO',
            'email' => null,
            'phone' => '-',
            'employee_number' => '230091',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'LUZ',
            'middle_name' => 'BEATRIZ',
            'last_name' => 'BONILLA',
            'second_last_name' => 'ALDANA',
            'email' => null,
            'phone' => '-',
            'employee_number' => '230092',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'SERGIO',
            'middle_name' => null,
            'last_name' => 'CHAVARRIA',
            'second_last_name' => 'GUERRERO',
            'email' => 'sergio.chavarria@ldrsolutions.com.mx',
            'phone' => '0',
            'employee_number' => '230095',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'ROCIO',
            'middle_name' => 'ADRIANA',
            'last_name' => 'VALADEZ',
            'second_last_name' => 'MARTINEZ',
            'email' => null,
            'phone' => null,
            'employee_number' => '230096',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'GRECIA',
            'middle_name' => 'PAULINA',
            'last_name' => 'MARTINEZ',
            'second_last_name' => 'GOMEZ',
            'email' => 'coordinacionjuridica@ldrsolutions.com.mx',
            'phone' => null,
            'employee_number' => '230097',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'GEMA',
            'middle_name' => 'GABRIELA',
            'last_name' => 'REYES',
            'second_last_name' => 'ROMERO',
            'email' => null,
            'phone' => '-',
            'employee_number' => '230098',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'MARIA',
            'middle_name' => 'DEL CARMEN',
            'last_name' => 'AVILA',
            'second_last_name' => 'SANCHEZ',
            'email' => null,
            'phone' => '4742085186',
            'employee_number' => '230099',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'CLAUDIA',
            'middle_name' => null,
            'last_name' => 'MARTINEZ',
            'second_last_name' => 'VILLAGRANA',
            'email' => null,
            'phone' => '.',
            'employee_number' => '230100',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'FEDERICO',
            'middle_name' => null,
            'last_name' => 'MENDOZA',
            'second_last_name' => 'VAZQUEZ',
            'email' => null,
            'phone' => '-',
            'employee_number' => '230102',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'ISSAC',
            'middle_name' => null,
            'last_name' => 'VALADEZ',
            'second_last_name' => 'CHAVEZ',
            'email' => null,
            'phone' => '4741488052',
            'employee_number' => '230103',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'CHRISTIAN',
            'middle_name' => 'ALEJANDRO',
            'last_name' => 'RAMIREZ',
            'second_last_name' => 'AYALA',
            'email' => 'christian.ramirez@ldrsolutions.com.mx',
            'phone' => '3521471155',
            'employee_number' => '230105',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'SARAI',
            'middle_name' => null,
            'last_name' => 'GONZALEZ',
            'second_last_name' => 'MARQUEZ',
            'email' => 'compras2@ldrsolutions.com.mx',
            'phone' => null,
            'employee_number' => '230107',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'RAUL',
            'middle_name' => null,
            'last_name' => 'PADILLA',
            'second_last_name' => 'ROJO',
            'email' => null,
            'phone' => '-',
            'employee_number' => '230110',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JUAN',
            'middle_name' => 'PABLO',
            'last_name' => 'GOMEZ',
            'second_last_name' => 'CEDILLO',
            'email' => null,
            'phone' => '-',
            'employee_number' => '230111',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'FRANCISCO',
            'middle_name' => 'JAVIER',
            'last_name' => 'VILLALOBOS',
            'second_last_name' => 'JUAREZ',
            'email' => 'javier.juarez@ldrsolutions.com.mx',
            'phone' => '-',
            'employee_number' => '230112',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'CARMEN',
            'middle_name' => 'CLARISA',
            'last_name' => 'CONTRERAS',
            'second_last_name' => 'DIAZ',
            'email' => 'clarisa.contreras@ldrsolutions.com.mx',
            'phone' => null,
            'employee_number' => '230114',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'ROGELIO',
            'middle_name' => 'DAVID',
            'last_name' => 'CORONA',
            'second_last_name' => 'PALACIOS',
            'email' => 'rogelio.corona@ldrsolutions.com.mx',
            'phone' => null,
            'employee_number' => '230115',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JORGE',
            'middle_name' => 'MANUEL',
            'last_name' => 'HEREDIA',
            'second_last_name' => 'ALVARADO',
            'email' => 'jorge.heredia@ldrsolutions.com.mx',
            'phone' => '-',
            'employee_number' => '230116',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'SADAO',
            'middle_name' => null,
            'last_name' => 'MOCHIZUKI',
            'second_last_name' => 'ASCENCIO',
            'email' => 'juridico@ldrsolutions.com.mx',
            'phone' => null,
            'employee_number' => '230117',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'CARLOS',
            'middle_name' => 'ALBERTO',
            'last_name' => 'FERNANDEZ',
            'second_last_name' => 'LOPERENA',
            'email' => 'carlos.fernandez@ldrsolutions.com.mx',
            'phone' => '0',
            'employee_number' => '230118',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'ANA',
            'middle_name' => 'LILIA',
            'last_name' => 'ALTAMIRANO',
            'second_last_name' => 'ACUÑA',
            'email' => 'ana.altamirano@ldrsolutions.com.mx',
            'phone' => '0',
            'employee_number' => '230120',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'MICHAEL',
            'middle_name' => null,
            'last_name' => 'TABLA',
            'second_last_name' => 'CRUZ',
            'email' => 'michael.tabla@ldrsolutions.com.mx',
            'phone' => '-',
            'employee_number' => '230121',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'CRISTIAN',
            'middle_name' => null,
            'last_name' => 'ZAVALA',
            'second_last_name' => 'MARTINEZ',
            'email' => null,
            'phone' => '4741097036',
            'employee_number' => '230122',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'PAOLA',
            'middle_name' => 'BERENICE',
            'last_name' => 'MENDEZ',
            'second_last_name' => 'SANCHEZ',
            'email' => null,
            'phone' => '-',
            'employee_number' => '230123',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'LAURA',
            'middle_name' => 'ISELA',
            'last_name' => 'RANGEL',
            'second_last_name' => 'AGUILAR',
            'email' => null,
            'phone' => '-',
            'employee_number' => '230124',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'YESENIA',
            'middle_name' => 'GUADALUPE',
            'last_name' => 'ALCARAZ',
            'second_last_name' => 'VAZQUEZ',
            'email' => null,
            'phone' => null,
            'employee_number' => '230125',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'BAUDELIO',
            'middle_name' => null,
            'last_name' => 'GARCIA',
            'second_last_name' => 'SILVA',
            'email' => null,
            'phone' => '-',
            'employee_number' => '230127',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JORGE',
            'middle_name' => null,
            'last_name' => 'RIOS',
            'second_last_name' => 'CONEJO',
            'email' => 'jorge.rios@ldrsolutions.com.mx',
            'phone' => '0',
            'employee_number' => '230128',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'GABRIEL',
            'middle_name' => null,
            'last_name' => 'QUEZADA',
            'second_last_name' => 'NAVARRETE',
            'email' => 'gabriel.quezada@fulongma.com.mx',
            'phone' => null,
            'employee_number' => '230129',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'MIGUEL',
            'middle_name' => 'ANGEL',
            'last_name' => 'DE LA CRUZ',
            'second_last_name' => 'ESCAMILLA',
            'email' => 'migueldelacruz@ldrsolutions.com.mx',
            'phone' => '-',
            'employee_number' => '230130',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'DANIEL',
            'middle_name' => null,
            'last_name' => 'FLORES',
            'second_last_name' => 'MARTINEZ',
            'email' => 'daniel.flores@ldrsolutions.com.mx',
            'phone' => null,
            'employee_number' => '230132',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'NANCI',
            'middle_name' => 'SARAHI',
            'last_name' => 'RUIZ',
            'second_last_name' => 'CARRASCO',
            'email' => 'sarahi.ruiz@ldrsolutions.com.mx',
            'phone' => '0',
            'employee_number' => '230134',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'MIGUEL',
            'middle_name' => 'ANGEL',
            'last_name' => 'GRANADOS',
            'second_last_name' => 'JUAREZ',
            'email' => 'miguel.granados@ldrsolutions.com.mx',
            'phone' => null,
            'employee_number' => '230135',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JOSE',
            'middle_name' => 'MISSAEL',
            'last_name' => 'FERNANDEZ',
            'second_last_name' => 'GASPAR',
            'email' => 'missael.fernandez@ldrsolutions.com.mx',
            'phone' => '0',
            'employee_number' => '230139',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JESUS',
            'middle_name' => 'MANUEL',
            'last_name' => 'AMEZQUITA',
            'second_last_name' => 'DELGADO',
            'email' => 'jesus.amezquita@ldrsolutions.com.mx',
            'phone' => '3314115727',
            'employee_number' => '230141',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'OSCAR',
            'middle_name' => 'DAVID',
            'last_name' => 'PEREZ',
            'second_last_name' => 'GARCIA',
            'email' => 'oscar.perez@ldrsolutions.com.mx',
            'phone' => '0',
            'employee_number' => '230143',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'KARLA',
            'middle_name' => 'BERENICE',
            'last_name' => 'ALDANA',
            'second_last_name' => 'HERNANDEZ',
            'email' => 'karla.aldana@ldrsolutions.com.mx',
            'phone' => '0',
            'employee_number' => '230144',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'TERESA',
            'middle_name' => null,
            'last_name' => 'HERNANDEZ',
            'second_last_name' => 'ROSALES',
            'email' => 'teresa.hernandez@ldrsolutions.com.mx',
            'phone' => null,
            'employee_number' => '230146',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'ANDREE',
            'middle_name' => null,
            'last_name' => 'ROBLES',
            'second_last_name' => 'ALVAREZ',
            'email' => 'andree.robles@ldrsolutions.com.mx',
            'phone' => '0',
            'employee_number' => '230149',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'PALOMA',
            'middle_name' => 'LIZBETH',
            'last_name' => 'TREJO',
            'second_last_name' => 'ONTIVEROS',
            'email' => null,
            'phone' => '-',
            'employee_number' => '230150',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JUAN',
            'middle_name' => 'ANTONIO',
            'last_name' => 'GONZALEZ',
            'second_last_name' => 'TORRES',
            'email' => null,
            'phone' => '-',
            'employee_number' => '230153',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'TOMAS',
            'middle_name' => 'ISAAC',
            'last_name' => 'GOMEZ',
            'second_last_name' => 'MENDEZ',
            'email' => 'isaac.gomez@ldrsolutions.com.mx',
            'phone' => null,
            'employee_number' => '230156',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'MIGUEL',
            'middle_name' => 'ANGEL',
            'last_name' => 'URIBE',
            'second_last_name' => 'LANDOIS',
            'email' => 'miguel.uribe@ldrsolutions.com.mx',
            'phone' => '-',
            'employee_number' => '230162',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'ANGEL',
            'middle_name' => 'DE JESUS',
            'last_name' => 'PABLO',
            'second_last_name' => 'GOMEZ',
            'email' => null,
            'phone' => '4741357366',
            'employee_number' => '230166',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'FRANCISCO',
            'middle_name' => 'JAVIER',
            'last_name' => 'CLAUDIO',
            'second_last_name' => 'BECERRA',
            'email' => null,
            'phone' => '-',
            'employee_number' => '230167',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'MARIA',
            'middle_name' => 'GUADALUPE',
            'last_name' => 'PEDROZA',
            'second_last_name' => 'BANDA',
            'email' => null,
            'phone' => '-',
            'employee_number' => '230168',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JUAN',
            'middle_name' => 'DANIEL',
            'last_name' => 'RODRIGUEZ',
            'second_last_name' => 'BURCIAGA',
            'email' => null,
            'phone' => '-',
            'employee_number' => '230170',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'FERNANDA',
            'middle_name' => 'GUADALUPE',
            'last_name' => 'DE ALBA',
            'second_last_name' => 'SANTOYO',
            'email' => null,
            'phone' => '-',
            'employee_number' => '230173',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'TANIA',
            'middle_name' => 'SELENA',
            'last_name' => 'PEDROZA',
            'second_last_name' => 'ROMO',
            'email' => null,
            'phone' => '-',
            'employee_number' => '230177',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JOSE',
            'middle_name' => 'DE JESUS',
            'last_name' => 'BARAJAS',
            'second_last_name' => 'GARCIA',
            'email' => 'jesus.barajas@ldrsolutions.com.mx',
            'phone' => '4741292280',
            'employee_number' => '230180',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'ALEJANDRO',
            'middle_name' => null,
            'last_name' => 'LARA',
            'second_last_name' => 'BOCANEGRA',
            'email' => 'alejandro.lara@ldrsolutions.com.mx',
            'phone' => '-',
            'employee_number' => '230185',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'RAYMUNDO',
            'middle_name' => 'DANIEL',
            'last_name' => 'AYALA',
            'second_last_name' => 'PORTILLO',
            'email' => 'raymundo.ayala@ldrsolutions.com.mx',
            'phone' => '.',
            'employee_number' => '230186',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'FABIAN',
            'middle_name' => 'EDUARDO',
            'last_name' => 'MARTINEZ',
            'second_last_name' => 'ARANA',
            'email' => 'fabian.martinez@ldrsolutions.com.mx',
            'phone' => '-',
            'employee_number' => '230187',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'MARCO',
            'middle_name' => 'OCTAVIO',
            'last_name' => 'BALBUENA',
            'second_last_name' => 'ESTRADA',
            'email' => 'marco.balbuena@ldrsolutions.com.mx',
            'phone' => null,
            'employee_number' => '230189',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'VALERIA',
            'middle_name' => null,
            'last_name' => 'MALAGON',
            'second_last_name' => 'CASTILLO',
            'email' => 'valeria.malagon@ldrsolutions.com.mx',
            'phone' => '0',
            'employee_number' => '230191',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'EMMANUEL',
            'middle_name' => null,
            'last_name' => 'VARGAS',
            'second_last_name' => 'LOPEZ',
            'email' => 'emmanuel.vargas@ldrsolutions.com.mx',
            'phone' => '0',
            'employee_number' => '230192',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'LUIS',
            'middle_name' => 'ANGEL',
            'last_name' => 'LOPEZ',
            'second_last_name' => 'ESTRADA',
            'email' => null,
            'phone' => '-',
            'employee_number' => '230193',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'ISRAEL',
            'middle_name' => null,
            'last_name' => 'MEJIA',
            'second_last_name' => 'GONZALEZ',
            'email' => 'israel.gonzalez@ldrsolutions.com.mx',
            'phone' => '-',
            'employee_number' => '230194',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'LAURA',
            'middle_name' => 'ELIZABETH',
            'last_name' => 'RODRIGUEZ',
            'second_last_name' => 'LOPEZ',
            'email' => 'laura.rodriguez@ldrsolutions.com.mx',
            'phone' => '0',
            'employee_number' => '230196',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'GERARDO',
            'middle_name' => 'JAVIER',
            'last_name' => 'CANALES',
            'second_last_name' => 'FRANCO',
            'email' => 'gerardo.canales@jetourmx.com',
            'phone' => null,
            'employee_number' => '230197',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'SERGIO',
            'middle_name' => null,
            'last_name' => 'ORTEGA',
            'second_last_name' => 'NORIEGA',
            'email' => 'sergio.ortega@ldrsolutions.com.mx',
            'phone' => '5627464757',
            'employee_number' => '230199',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JOHANA',
            'middle_name' => 'VANESSA',
            'last_name' => 'REAL',
            'second_last_name' => 'RODRIGUEZ',
            'email' => 'johana.real@ldrsolutions.com.mx',
            'phone' => null,
            'employee_number' => '230201',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JORGE',
            'middle_name' => 'ISAAC',
            'last_name' => 'SANCHEZ',
            'second_last_name' => 'PEREZ',
            'email' => 'jorge.sanchez@ldrsolutions.com.mx',
            'phone' => '0',
            'employee_number' => '230202',
            'password' => Hash::make('password'),
            'user_type' => 4,
        ]);

        User::create([
            'first_name' => 'URIEL',
            'middle_name' => 'MARGARITO',
            'last_name' => 'GARCIA',
            'second_last_name' => 'DAVILA',
            'email' => 'uriel.garcia@ldrsolutions.com.mx',
            'phone' => null,
            'employee_number' => '230203',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'EDUARDO',
            'middle_name' => null,
            'last_name' => 'GARCIA',
            'second_last_name' => 'MENDOZA',
            'email' => null,
            'phone' => null,
            'employee_number' => '230207',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'ESTEFANIA',
            'middle_name' => 'ARLETTE',
            'last_name' => 'GARCIA',
            'second_last_name' => 'HERRERA',
            'email' => 'arlette.garcia@ldrsolutions.com.mx',
            'phone' => '0',
            'employee_number' => '230208',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'BETSABE',
            'middle_name' => null,
            'last_name' => 'LEON',
            'second_last_name' => 'PEREZ',
            'email' => 'betsabe.leon@ldrsolutions.com.mx',
            'phone' => '5531899281',
            'employee_number' => '230209',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'VERONICA',
            'middle_name' => 'ADRIANA',
            'last_name' => 'RIOS',
            'second_last_name' => 'SARABIA',
            'email' => 'veronica.rios@ldrsolutions.com.mx',
            'phone' => null,
            'employee_number' => '230212',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JESUS',
            'middle_name' => 'ADRIEL',
            'last_name' => 'CERVANTES',
            'second_last_name' => 'ZAMUDIO',
            'email' => 'adriel.cervantes@ldrsolutions.com.mx',
            'phone' => null,
            'employee_number' => '230213',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JORGE',
            'middle_name' => 'LUIS',
            'last_name' => 'MARTINEZ',
            'second_last_name' => 'ROMO',
            'email' => 'jorgel.martinez@ldrsolutions.com.mx',
            'phone' => null,
            'employee_number' => '230214',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'MONICA',
            'middle_name' => null,
            'last_name' => 'CERVANTES',
            'second_last_name' => 'VAZQUEZ',
            'email' => 'monica.cervantes@ldrsolutions.com.mx',
            'phone' => '-',
            'employee_number' => '230215',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'SAMUEL',
            'middle_name' => null,
            'last_name' => 'VALERIO',
            'second_last_name' => 'COLORADO',
            'email' => 'samuel.valerio@ldrsolutions.com.mx',
            'phone' => null,
            'employee_number' => '230219',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'ARMANDO',
            'middle_name' => null,
            'last_name' => 'SENA',
            'second_last_name' => 'ORTIZ',
            'email' => 'armando.sena@ldrsolutions.com.mx',
            'phone' => null,
            'employee_number' => '230221',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'ARBI',
            'middle_name' => 'ONAN',
            'last_name' => 'PEREZ',
            'second_last_name' => 'HERNANDEZ',
            'email' => 'arbi.perez@ldrsolutions.com.mx',
            'phone' => null,
            'employee_number' => '230222',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JUAN',
            'middle_name' => null,
            'last_name' => 'BERMAN',
            'second_last_name' => 'CORONADO',
            'email' => 'mantenimiento@ldrsolutions.com.mx',
            'phone' => '0',
            'employee_number' => '230223',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'ARTURO',
            'middle_name' => 'DANIEL',
            'last_name' => 'VARGAS',
            'second_last_name' => 'MACIAS',
            'email' => 'arturo.vargas@ldrsolutions.com.mx',
            'phone' => '0',
            'employee_number' => '230226',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'DANIEL',
            'middle_name' => null,
            'last_name' => 'LEDEZMA',
            'second_last_name' => 'MELENDEZ',
            'email' => 'daniel.ledezma@ldrsolutions.com.mx',
            'phone' => '0',
            'employee_number' => '230228',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JUAN',
            'middle_name' => 'MANUEL',
            'last_name' => 'VELIZ',
            'second_last_name' => 'ALBA',
            'email' => 'juan.veliz@ldrsolutions.com.mx',
            'phone' => '0',
            'employee_number' => '230229',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'CARLOS',
            'middle_name' => 'CUTBERTO',
            'last_name' => 'ROMAN',
            'second_last_name' => 'ESCOBEDO',
            'email' => 'carlos.roman@ldrsolutions.com.mx',
            'phone' => null,
            'employee_number' => '230230',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'EVERARDO',
            'middle_name' => null,
            'last_name' => 'CRUZ',
            'second_last_name' => 'RODRIGUEZ',
            'email' => null,
            'phone' => null,
            'employee_number' => '230232',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'CARLOS',
            'middle_name' => null,
            'last_name' => 'LOPEZ',
            'second_last_name' => 'RODRIGUEZ',
            'email' => 'carlos.lopez@ldrsolutions.com.mx',
            'phone' => '-',
            'employee_number' => '230235',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'ROSALBA',
            'middle_name' => null,
            'last_name' => 'CHAVEZ',
            'second_last_name' => 'LARA',
            'email' => 'rosalba.chavez@ldrsolutions.com.mx',
            'phone' => '0',
            'employee_number' => '230236',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'HUGO',
            'middle_name' => 'ENRIQUE',
            'last_name' => 'LOPEZ',
            'second_last_name' => 'VANEGAS',
            'email' => 'enrique.lopez@ldrsolutions.com.mx',
            'phone' => '0',
            'employee_number' => '230239',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JUAN',
            'middle_name' => 'PABLO',
            'last_name' => 'RAMIREZ',
            'second_last_name' => 'LOPEZ',
            'email' => 'pablo.ramirez@ldrsolutions.com.mx',
            'phone' => null,
            'employee_number' => '230240',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'HUGO',
            'middle_name' => 'ALEJANDRO',
            'last_name' => 'REYES',
            'second_last_name' => 'ZAMUDIO',
            'email' => 'alejandro.reyes@ldrsolutions.com.mx',
            'phone' => '0',
            'employee_number' => '230241',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'MARIA',
            'middle_name' => 'ELENA',
            'last_name' => 'BETANCOURT',
            'second_last_name' => 'SANTILLAN',
            'email' => null,
            'phone' => null,
            'employee_number' => '230242',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'OSCAR',
            'middle_name' => null,
            'last_name' => 'FIGUEROA',
            'second_last_name' => 'OCAMPO',
            'email' => 'oscar.figueroa@ldrsolutions.com.mx',
            'phone' => '0',
            'employee_number' => '230243',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'INGRID',
            'middle_name' => 'ABIGAIL',
            'last_name' => 'OLVERA',
            'second_last_name' => 'MARTINEZ',
            'email' => 'ingrid.olvera@ldrsolutions.com.mx',
            'phone' => '0',
            'employee_number' => '230245',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'EDUARDO',
            'middle_name' => 'EMMANUEL',
            'last_name' => 'MARTINEZ',
            'second_last_name' => 'ONTIVEROS',
            'email' => 'eduardo.martinez@ldrsolutions.com.mx',
            'phone' => '0',
            'employee_number' => '230246',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'KARLA',
            'middle_name' => 'VERONICA',
            'last_name' => 'LUCIO',
            'second_last_name' => 'GONZALEZ',
            'email' => 'karla.lucio@ldrsolutions.com.mx',
            'phone' => null,
            'employee_number' => '230250',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JOSE',
            'middle_name' => 'ANDRES',
            'last_name' => 'DELGADO',
            'second_last_name' => 'LOPEZ',
            'email' => null,
            'phone' => null,
            'employee_number' => '230251',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'LEOPOLDO',
            'middle_name' => 'HUMBERTO',
            'last_name' => 'ARGUELLO',
            'second_last_name' => 'PASTRANA',
            'email' => 'humberto.arguello@ldrsolutions.com.mx',
            'phone' => '0',
            'employee_number' => '230253',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JIMENA',
            'middle_name' => null,
            'last_name' => 'PADILLA',
            'second_last_name' => 'SANTANA',
            'email' => 'jimena.padilla@ldrsolutions.com.mx',
            'phone' => '0',
            'employee_number' => '230256',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'ESTEFANIA',
            'middle_name' => null,
            'last_name' => 'DEL ANGEL',
            'second_last_name' => 'SERVIN',
            'email' => 'estefania.delangel@ldrsolutions.com.mx',
            'phone' => 'SIN ASIGNA',
            'employee_number' => '230260',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'ARMANDO',
            'middle_name' => null,
            'last_name' => 'PONCE',
            'second_last_name' => 'GARCIA',
            'email' => 'armando.ponce@ldrenta.com',
            'phone' => null,
            'employee_number' => '230261',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'RAUL',
            'middle_name' => 'ANGEL',
            'last_name' => 'DE JESUS',
            'second_last_name' => 'MAGDALENO',
            'email' => null,
            'phone' => null,
            'employee_number' => '230264',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'DAVID',
            'middle_name' => null,
            'last_name' => 'MARTINEZ',
            'second_last_name' => 'BRAVO',
            'email' => 'david.martinez@ldrsolutions.com.mx',
            'phone' => '0',
            'employee_number' => '230266',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JORGE',
            'middle_name' => 'LUIS',
            'last_name' => 'ANTONIO',
            'second_last_name' => 'SANTIAGO',
            'email' => null,
            'phone' => null,
            'employee_number' => '230267',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JESUS',
            'middle_name' => 'OCTAVIO',
            'last_name' => 'HERNANDEZ',
            'second_last_name' => 'FRANCO',
            'email' => null,
            'phone' => null,
            'employee_number' => '230268',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'ERNESTO',
            'middle_name' => null,
            'last_name' => 'CALDERON',
            'second_last_name' => 'GALINDO',
            'email' => 'ernesto.calderon@fulongma.com.mx',
            'phone' => null,
            'employee_number' => '230269',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'GABRIEL',
            'middle_name' => null,
            'last_name' => 'VALADEZ',
            'second_last_name' => 'VILLALOBOS',
            'email' => null,
            'phone' => '0',
            'employee_number' => '230270',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'GERSON',
            'middle_name' => null,
            'last_name' => 'JIMENEZ',
            'second_last_name' => 'SALAZAR',
            'email' => 'gerson.jimenez@ldrsolutions.com.mx',
            'phone' => '0',
            'employee_number' => '230272',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'PATRICIA',
            'middle_name' => null,
            'last_name' => 'GARCIA',
            'second_last_name' => 'RINCON',
            'email' => null,
            'phone' => '0',
            'employee_number' => '230277',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'LUIS',
            'middle_name' => 'REY',
            'last_name' => 'PICAZO',
            'second_last_name' => 'CAMACHO',
            'email' => 'luis.picazo@ldrsolutions.com.mx',
            'phone' => '0',
            'employee_number' => '230280',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'PABLO',
            'middle_name' => null,
            'last_name' => 'TORREJON',
            'second_last_name' => 'BECERRIL',
            'email' => 'pablo.torrejon@ldrsolutions.com.mx',
            'phone' => '-',
            'employee_number' => '230281',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'EVER',
            'middle_name' => null,
            'last_name' => 'HERNANDEZ',
            'second_last_name' => 'GUTIERREZ',
            'email' => 'ever.hernandez@ldrsolutions.com.mx',
            'phone' => '0',
            'employee_number' => '230282',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'DIANA',
            'middle_name' => 'PAOLA',
            'last_name' => 'MONTALVO',
            'second_last_name' => 'PEDROZA',
            'email' => null,
            'phone' => '0',
            'employee_number' => '230284',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'MARIO',
            'middle_name' => 'AXEL',
            'last_name' => 'JIMENEZ',
            'second_last_name' => 'DIAZ',
            'email' => null,
            'phone' => '0',
            'employee_number' => '230285',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'OMAR',
            'middle_name' => 'EDUARDO',
            'last_name' => 'GONZALEZ',
            'second_last_name' => 'CISNEROS',
            'email' => 'omar.gonzalez@ldrsolutions.com.mx',
            'phone' => '0',
            'employee_number' => '230286',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JOSE',
            'middle_name' => 'DE JESUS',
            'last_name' => 'LOPEZ',
            'second_last_name' => 'ALBA',
            'email' => null,
            'phone' => null,
            'employee_number' => '230288',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'SARAI',
            'middle_name' => null,
            'last_name' => 'RAMIREZ',
            'second_last_name' => 'MARTINEZ',
            'email' => 'sarai.ramirez@ldrsolutions.com.mx',
            'phone' => '0',
            'employee_number' => '230290',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'VICTOR',
            'middle_name' => 'LEVI',
            'last_name' => 'ARAUZ',
            'second_last_name' => 'ANTONIO',
            'email' => 'levi.arauz@ldrsolutions.com.mx',
            'phone' => null,
            'employee_number' => '230291',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'SUSANA',
            'middle_name' => 'ERANDI',
            'last_name' => 'DE LA CRUZ',
            'second_last_name' => 'BIRRUETA',
            'email' => 'erandi.delacruz@ldrsolutions.com.mx',
            'phone' => '0',
            'employee_number' => '230292',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'RAUL',
            'middle_name' => 'FERNANDO',
            'last_name' => 'MUÑOZ',
            'second_last_name' => 'OLALDE',
            'email' => 'raul.munoz@ldrsolutions.com.mx',
            'phone' => '0',
            'employee_number' => '230293',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'ERICK',
            'middle_name' => 'ARIEL',
            'last_name' => 'SANCHEZ',
            'second_last_name' => 'HERNANDEZ',
            'email' => 'ariel.sanchez@ldrsolutions.com.mx',
            'phone' => '0',
            'employee_number' => '230294',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JOSE',
            'middle_name' => null,
            'last_name' => 'GOMEZ',
            'second_last_name' => 'IBARRA',
            'email' => null,
            'phone' => '0',
            'employee_number' => '230295',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'EVELYN',
            'middle_name' => 'CRISTAL',
            'last_name' => 'CALDERON',
            'second_last_name' => 'GUTIERREZ',
            'email' => 'evelyn.calderon@ldrsolutions.com.mx',
            'phone' => '0',
            'employee_number' => '230296',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'ARLETH',
            'middle_name' => 'GUADALUPE',
            'last_name' => 'MENDEZ',
            'second_last_name' => 'SANCHEZ',
            'email' => null,
            'phone' => '0',
            'employee_number' => '230297',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'EDGAR',
            'middle_name' => 'EMILIANO',
            'last_name' => 'ESPINOSA',
            'second_last_name' => 'ARANDA',
            'email' => null,
            'phone' => null,
            'employee_number' => '230298',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JAHIR',
            'middle_name' => 'DE JESUS',
            'last_name' => 'GARCIA',
            'second_last_name' => 'BRAVO',
            'email' => 'jahir.garcia@ldrsolutions.com.mx',
            'phone' => '0',
            'employee_number' => '230302',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'LUIS',
            'middle_name' => 'ANTONIO',
            'last_name' => 'ESCALONA',
            'second_last_name' => 'JUAREZ',
            'email' => null,
            'phone' => null,
            'employee_number' => '240311',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'ADRIAN',
            'middle_name' => null,
            'last_name' => 'BELTRAN',
            'second_last_name' => 'MATA',
            'email' => null,
            'phone' => null,
            'employee_number' => '240312',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'CRISTOBAL',
            'middle_name' => null,
            'last_name' => 'ROCHA',
            'second_last_name' => 'DE SANTIAGO',
            'email' => null,
            'phone' => null,
            'employee_number' => '240313',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'CRISTIAN',
            'middle_name' => 'GABRIEL',
            'last_name' => 'LEOS',
            'second_last_name' => 'GOMEZ',
            'email' => 'cristian.leos@ldrsolutions.com.mx',
            'phone' => '0',
            'employee_number' => '240314',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'SALVADOR',
            'middle_name' => null,
            'last_name' => 'CARBAJAL',
            'second_last_name' => 'MENESES',
            'email' => 'salvador.carbajal@ldrsolutions.com.mx',
            'phone' => '0',
            'employee_number' => '240315',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'ESTEFANI',
            'middle_name' => null,
            'last_name' => 'HERNANDEZ',
            'second_last_name' => 'CRUZ',
            'email' => null,
            'phone' => '0',
            'employee_number' => '240317',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'ANA',
            'middle_name' => 'LUCIA',
            'last_name' => 'URBINA',
            'second_last_name' => 'HERNANDEZ',
            'email' => null,
            'phone' => '0',
            'employee_number' => '240319',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'PEDRO',
            'middle_name' => 'HECTOR',
            'last_name' => 'SERRANO',
            'second_last_name' => 'HERRERA',
            'email' => null,
            'phone' => null,
            'employee_number' => '240321',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'MARCO',
            'middle_name' => 'ANTONIO',
            'last_name' => 'VASQUEZ',
            'second_last_name' => 'MARTINEZ',
            'email' => 'marco.vasquez@jetourmx.com',
            'phone' => '0',
            'employee_number' => '240326',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'MARIA',
            'middle_name' => 'DEL CARMEN',
            'last_name' => 'CRUZ',
            'second_last_name' => 'JOSE',
            'email' => null,
            'phone' => null,
            'employee_number' => '240327',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'SANDRA',
            'middle_name' => 'FABIOLA',
            'last_name' => 'LEON',
            'second_last_name' => 'MORALES',
            'email' => null,
            'phone' => null,
            'employee_number' => '240328',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'KARLA',
            'middle_name' => 'ITZEL',
            'last_name' => 'CASTILLO',
            'second_last_name' => 'DE LA TORRE',
            'email' => 'karla.castillo@ldrsolutions.com.mx',
            'phone' => '0',
            'employee_number' => '240333',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'EDGAR',
            'middle_name' => 'ALAN',
            'last_name' => 'REA',
            'second_last_name' => 'ESTRADA',
            'email' => 'edgar.estrada@ldrsolutions.com.mx',
            'phone' => '0',
            'employee_number' => '240334',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'ISAAC',
            'middle_name' => null,
            'last_name' => 'GALVAN',
            'second_last_name' => 'BAUTISTA',
            'email' => 'isaac.galvan@ldrsolutions.com.mx',
            'phone' => '0',
            'employee_number' => '240337',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'ROSA',
            'middle_name' => 'LINDA',
            'last_name' => 'PEGUERO',
            'second_last_name' => 'RAMIREZ',
            'email' => 'rosa.peguero@ldrsolutions.com.mx',
            'phone' => '0',
            'employee_number' => '240338',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JUAN',
            'middle_name' => 'ANGEL',
            'last_name' => 'REYES',
            'second_last_name' => 'MALDONADO',
            'email' => null,
            'phone' => null,
            'employee_number' => '240339',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'VICTOR',
            'middle_name' => 'MANUEL',
            'last_name' => 'VALDEZ',
            'second_last_name' => 'GARCIA',
            'email' => 'victor.valdez@ldrsolutions.com.mx',
            'phone' => '0',
            'employee_number' => '240340',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'CESAR',
            'middle_name' => 'ALEJANDRO',
            'last_name' => 'MOSQUEDA',
            'second_last_name' => 'TERAN',
            'email' => 'cesarmt@ldrsolutions.com.mx',
            'phone' => null,
            'employee_number' => '240341',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'LUIS',
            'middle_name' => 'ENRIQUE',
            'last_name' => 'CASTAÑON',
            'second_last_name' => 'VARGAS',
            'email' => 'enrique.castanon@ldrsolutions.com.mx',
            'phone' => '0',
            'employee_number' => '240345',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JOSE',
            'middle_name' => 'ALBERTO',
            'last_name' => 'SORIANO',
            'second_last_name' => 'MORALES',
            'email' => 'alberto.soriano@ldrsolutions.com.mx',
            'phone' => '0',
            'employee_number' => '240346',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'OSCAR',
            'middle_name' => 'EMANUEL',
            'last_name' => 'GARCIA',
            'second_last_name' => 'RAMIREZ',
            'email' => 'emmanuel.garcia@ldrsolutions.com.mx',
            'phone' => '0',
            'employee_number' => '240347',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'YAEL',
            'middle_name' => 'DANIELA',
            'last_name' => 'BERNAL',
            'second_last_name' => 'SANCHEZ',
            'email' => 'daniela.bernal@ldrsolutions.com.mx',
            'phone' => '0',
            'employee_number' => '240348',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'SERGIO',
            'middle_name' => 'ARMANDO',
            'last_name' => 'GASCA',
            'second_last_name' => 'SOLORIO',
            'email' => 'sergio.gasca@ldrsolutions.com.mx',
            'phone' => '0',
            'employee_number' => '240349',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JUAN',
            'middle_name' => 'ALBERTO',
            'last_name' => 'FACIO',
            'second_last_name' => 'FACIO',
            'email' => null,
            'phone' => '0',
            'employee_number' => '240351',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'ISAAC',
            'middle_name' => null,
            'last_name' => 'GOMEZ',
            'second_last_name' => 'FLORES',
            'email' => 'isaac.gomezf@ldrsolutions.com.mx',
            'phone' => '0',
            'employee_number' => '240352',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'BRANDON',
            'middle_name' => null,
            'last_name' => 'LUNA',
            'second_last_name' => 'PEREZ',
            'email' => 'brandon.luna@ldrsolutions.com.mx',
            'phone' => '0',
            'employee_number' => '240354',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'OSCAR',
            'middle_name' => 'ALBERTO',
            'last_name' => 'LOPEZ',
            'second_last_name' => 'AMADOR',
            'email' => null,
            'phone' => '0',
            'employee_number' => '240355',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JOSE',
            'middle_name' => 'ISRAEL',
            'last_name' => 'GARDUÑO',
            'second_last_name' => 'RUEDA',
            'email' => 'israel.garduno@ldrsolutions.com.mx',
            'phone' => '0',
            'employee_number' => '240358',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'ANDRES',
            'middle_name' => 'DE JESUS',
            'last_name' => 'HERNANDEZ',
            'second_last_name' => 'HERNANDEZ',
            'email' => 'andres.hernandez@ldrsolutions.com.mx',
            'phone' => '0',
            'employee_number' => '240359',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'ALAN',
            'middle_name' => 'DIDIER',
            'last_name' => 'GONZALEZ',
            'second_last_name' => 'SAAVEDRA',
            'email' => 'alan.gonzalez@ldrsolutions.com.mx',
            'phone' => '0',
            'employee_number' => '240361',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JAIR',
            'middle_name' => 'EMMANUEL',
            'last_name' => 'ROMO',
            'second_last_name' => 'RAMIREZ',
            'email' => null,
            'phone' => '0',
            'employee_number' => '240363',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'DANIEL',
            'middle_name' => 'ALBERTO',
            'last_name' => 'GONZALEZ',
            'second_last_name' => 'VILLALOBOS',
            'email' => null,
            'phone' => null,
            'employee_number' => '240366',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JAVIER',
            'middle_name' => null,
            'last_name' => 'HERNANDEZ',
            'second_last_name' => 'FRANCISCO',
            'email' => null,
            'phone' => '0',
            'employee_number' => '240367',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'MARIA',
            'middle_name' => 'TERESA',
            'last_name' => 'HERNANDEZ',
            'second_last_name' => 'FRANCISCO',
            'email' => null,
            'phone' => '0',
            'employee_number' => '240368',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'RUBEN',
            'middle_name' => null,
            'last_name' => 'MARTINEZ',
            'second_last_name' => 'LOPEZ',
            'email' => null,
            'phone' => '0',
            'employee_number' => '240369',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JOSE',
            'middle_name' => 'DE JESUS',
            'last_name' => 'RIVAS',
            'second_last_name' => 'RODRIGUEZ',
            'email' => null,
            'phone' => null,
            'employee_number' => '240370',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'ROLANDO',
            'middle_name' => null,
            'last_name' => 'ELIGIO',
            'second_last_name' => 'SALAZAR',
            'email' => 'rolando.eligio@ldrsolutions.com.mx',
            'phone' => '0',
            'employee_number' => '240372',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JAVIER',
            'middle_name' => null,
            'last_name' => 'RODRIGUEZ',
            'second_last_name' => 'MURRIETA',
            'email' => 'javier.rodriguez@ldrsolutions.com.mx',
            'phone' => '0',
            'employee_number' => '240374',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'DIEGO',
            'middle_name' => 'FEDERICO',
            'last_name' => 'GONZALEZ',
            'second_last_name' => 'GUEVARA',
            'email' => 'diego.gonzalez@ldrsolutions.com.mx',
            'phone' => '0',
            'employee_number' => '240375',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'PIEDAD',
            'middle_name' => null,
            'last_name' => 'GUILLEN',
            'second_last_name' => 'SAENZ',
            'email' => 'piedad.guillen@ldrsolutions.com.mx',
            'phone' => '0',
            'employee_number' => '240376',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'AISLINN',
            'middle_name' => 'ALEJANDRA',
            'last_name' => 'AGUIRRE',
            'second_last_name' => 'VELAZQUEZ',
            'email' => 'aislinn.aguirre@ldrsolutions.com.mx',
            'phone' => '0',
            'employee_number' => '240377',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'EMMA',
            'middle_name' => 'DANIELA',
            'last_name' => 'ALCANTARA',
            'second_last_name' => 'LOPEZ',
            'email' => 'emma.alcantara@ldrsolutions.com.mx',
            'phone' => '0',
            'employee_number' => '240378',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'OLIVIA',
            'middle_name' => 'EDITH',
            'last_name' => 'REYES',
            'second_last_name' => 'CORTES',
            'email' => 'olivia.reyes@ldrsolutions.com.mx',
            'phone' => '0',
            'employee_number' => '240379',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JUAN',
            'middle_name' => 'PABLO',
            'last_name' => 'BARRIENTOS',
            'second_last_name' => 'DELGADO',
            'email' => null,
            'phone' => null,
            'employee_number' => '240385',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'MARIA',
            'middle_name' => 'ISABEL',
            'last_name' => 'PEREZ',
            'second_last_name' => 'LOPEZ',
            'email' => null,
            'phone' => '0',
            'employee_number' => '240387',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'ISAURA',
            'middle_name' => 'IVETTE',
            'last_name' => 'HERNANDEZ',
            'second_last_name' => 'BRAVO',
            'email' => 'isaura.hernandez@ldrsolutions.com.mx',
            'phone' => '0',
            'employee_number' => '240389',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'FELIPE',
            'middle_name' => null,
            'last_name' => 'MARTINEZ',
            'second_last_name' => 'PONCE',
            'email' => null,
            'phone' => null,
            'employee_number' => '240391',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'PEDRO',
            'middle_name' => 'GUILLERMO',
            'last_name' => 'REYES',
            'second_last_name' => 'MIRANDA',
            'email' => null,
            'phone' => null,
            'employee_number' => '240392',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'CESAR',
            'middle_name' => 'IVAN',
            'last_name' => 'MARTINEZ',
            'second_last_name' => 'OCADIZ',
            'email' => null,
            'phone' => null,
            'employee_number' => '240393',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'CRISTIAN',
            'middle_name' => null,
            'last_name' => 'ZAVALA',
            'second_last_name' => 'MARTINEZ',
            'email' => null,
            'phone' => '-',
            'employee_number' => '240394',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'ANDREA',
            'middle_name' => null,
            'last_name' => 'GUERRERO',
            'second_last_name' => 'GARCIA',
            'email' => 'andrea.guerrero@ldrsolutions.com.mx',
            'phone' => '0',
            'employee_number' => '240395',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JORGE',
            'middle_name' => 'ANTONIO',
            'last_name' => 'HERNANDEZ',
            'second_last_name' => 'RODRIGUEZ',
            'email' => null,
            'phone' => '0',
            'employee_number' => '240396',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'ALBERTO',
            'middle_name' => null,
            'last_name' => 'LOSADA',
            'second_last_name' => 'LIZCANO',
            'email' => null,
            'phone' => '0',
            'employee_number' => '240397',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JOSE',
            'middle_name' => 'ANTONIO',
            'last_name' => 'BARRIENTOS',
            'second_last_name' => 'DELGADO',
            'email' => null,
            'phone' => null,
            'employee_number' => '240398',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'FILIBERTO',
            'middle_name' => 'COLOPATZIN',
            'last_name' => 'NIETO',
            'second_last_name' => 'ZURITA',
            'email' => null,
            'phone' => '0',
            'employee_number' => '240399',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'BRANDON',
            'middle_name' => 'EDUARDO',
            'last_name' => 'CEDILLO',
            'second_last_name' => 'BUENO',
            'email' => null,
            'phone' => null,
            'employee_number' => '240400',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'OSCAR',
            'middle_name' => 'URIEL',
            'last_name' => 'LOPEZ',
            'second_last_name' => 'GONZALEZ',
            'email' => null,
            'phone' => null,
            'employee_number' => '240401',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'MAURICIO',
            'middle_name' => null,
            'last_name' => 'GUZMAN',
            'second_last_name' => 'SANCHEZ',
            'email' => 'mauricio.guzman@ldrsolutions.com.mx',
            'phone' => '0',
            'employee_number' => '240402',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'MARIA',
            'middle_name' => 'DEL CARMEN',
            'last_name' => 'ARMENTA',
            'second_last_name' => 'DE LA ROSA',
            'email' => 'carmen.armenta@ldrsolutions.com.mx',
            'phone' => '0',
            'employee_number' => '240403',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JUAN',
            'middle_name' => 'ARTURO',
            'last_name' => 'ALVAREZ',
            'second_last_name' => 'GRANADOS',
            'email' => null,
            'phone' => '0',
            'employee_number' => '240404',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'CARLOS',
            'middle_name' => 'ANDRES',
            'last_name' => 'CERVANTES',
            'second_last_name' => 'VALADEZ',
            'email' => null,
            'phone' => null,
            'employee_number' => '240405',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'ANDREA',
            'middle_name' => 'TALIA',
            'last_name' => 'VARGAS',
            'second_last_name' => 'MORENO',
            'email' => null,
            'phone' => '0',
            'employee_number' => '240406',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'MARIA',
            'middle_name' => 'BERENICE',
            'last_name' => 'REYES',
            'second_last_name' => 'SANTANA',
            'email' => 'berenice.reyes@fulongma.com.mx',
            'phone' => '0',
            'employee_number' => '240407',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'LINO',
            'middle_name' => 'ANTONIO',
            'last_name' => 'AGUILERA',
            'second_last_name' => 'HERNANDEZ',
            'email' => null,
            'phone' => '0',
            'employee_number' => '240408',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JUAN',
            'middle_name' => 'RAMON',
            'last_name' => 'CHIN',
            'second_last_name' => 'VAZQUEZ',
            'email' => 'juan.chin@ldrsolutions.com.mx',
            'phone' => '0',
            'employee_number' => '240410',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'BRIAN',
            'middle_name' => null,
            'last_name' => 'AVILA',
            'second_last_name' => 'ORDOÑEZ',
            'email' => 'brian.avila@jetourmx.com',
            'phone' => null,
            'employee_number' => '240411',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JOEL',
            'middle_name' => 'BENJAMIN',
            'last_name' => 'SUAREZ',
            'second_last_name' => 'GUERRERO',
            'email' => null,
            'phone' => '0',
            'employee_number' => '240415',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'LUIS',
            'middle_name' => 'JAIME',
            'last_name' => 'LOPEZ',
            'second_last_name' => 'AMADOR',
            'email' => 'luislopez@ldrsolutions.com.mx',
            'phone' => '0',
            'employee_number' => '240416',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JOSE',
            'middle_name' => 'ALFREDO',
            'last_name' => 'VALDES',
            'second_last_name' => 'CRUZ',
            'email' => 'jose.valdes@ldrsolutions.com.mx',
            'phone' => '0',
            'employee_number' => '240417',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'MIGUEL',
            'middle_name' => 'ANGEL',
            'last_name' => 'ROMO',
            'second_last_name' => 'OLGUIN',
            'email' => 'miguel.romo@ldrsolutions.com.mx',
            'phone' => null,
            'employee_number' => '240418',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'LUIS',
            'middle_name' => 'ESAUL',
            'last_name' => 'DAVALOS',
            'second_last_name' => 'TOVAR',
            'email' => 'luis.davalos@ldrsolutions.com.mx',
            'phone' => '0',
            'employee_number' => '240421',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JOSE',
            'middle_name' => 'DANIEL',
            'last_name' => 'HERNANDEZ',
            'second_last_name' => 'VALDERRAMA',
            'email' => null,
            'phone' => '4742731661',
            'employee_number' => '240422',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'ALEJANDRO',
            'middle_name' => null,
            'last_name' => 'GONZALEZ',
            'second_last_name' => 'ARELLANO',
            'email' => 'alejandro.gonzalez@ldrsolutions.com.mx',
            'phone' => '0',
            'employee_number' => '240423',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JOSE',
            'middle_name' => 'DE JESUS',
            'last_name' => 'PADILLA',
            'second_last_name' => 'GUTIERREZ',
            'email' => null,
            'phone' => '0',
            'employee_number' => '240426',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'GERARDO',
            'middle_name' => 'ARTURO',
            'last_name' => 'NAJERA',
            'second_last_name' => 'GUEVARA',
            'email' => 'arturo.najera@ldrsolutions.com.mx',
            'phone' => '0',
            'employee_number' => '240427',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'BLANCA',
            'middle_name' => 'SILVIA',
            'last_name' => 'LOMELI',
            'second_last_name' => 'RODRIGUEZ',
            'email' => null,
            'phone' => null,
            'employee_number' => '240428',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JESUS',
            'middle_name' => null,
            'last_name' => 'CORTAZAR',
            'second_last_name' => 'LEAL',
            'email' => null,
            'phone' => null,
            'employee_number' => '240429',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'RENE',
            'middle_name' => 'ANDREI',
            'last_name' => 'GONZALEZ',
            'second_last_name' => 'GUERRERO',
            'email' => null,
            'phone' => '0',
            'employee_number' => '240432',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JESUS',
            'middle_name' => 'EMMANUEL',
            'last_name' => 'TORRES',
            'second_last_name' => 'ARAUJO',
            'email' => null,
            'phone' => null,
            'employee_number' => '240433',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'TOMAS',
            'middle_name' => 'EDUARDO',
            'last_name' => 'BAUTISTA',
            'second_last_name' => 'TAPIA',
            'email' => 'eduardo.bautista@ldrsolutions.com.mx',
            'phone' => '0',
            'employee_number' => '240434',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'SERGIO',
            'middle_name' => null,
            'last_name' => 'CORPUS',
            'second_last_name' => 'TORRES',
            'email' => null,
            'phone' => '0',
            'employee_number' => '240435',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'MERCEDES',
            'middle_name' => null,
            'last_name' => 'OLIVA',
            'second_last_name' => 'TORRES',
            'email' => 'mercedes.oliva@ldrsolutions.com.mx',
            'phone' => 'SIN ASIGNA',
            'employee_number' => '240437',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'NORMA',
            'middle_name' => 'VALERIA',
            'last_name' => 'SANCHEZ',
            'second_last_name' => 'LAZCANO',
            'email' => 'valeria.sanchez@ldrsolutions.com.mx',
            'phone' => null,
            'employee_number' => '240439',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'FERNANDA',
            'middle_name' => 'SHAMET',
            'last_name' => 'RODRIGUEZ',
            'second_last_name' => 'JASSO',
            'email' => 'fernanda.rodriguez@ldrsolutions.com.mx',
            'phone' => null,
            'employee_number' => '240440',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'OSWALDO',
            'middle_name' => 'ALFONSO',
            'last_name' => 'SANTOS',
            'second_last_name' => 'HERNANDEZ',
            'email' => 'osvaldo.santos@ldrsolutions.com.mx',
            'phone' => '0',
            'employee_number' => '240442',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'DIEGO',
            'middle_name' => 'BENJAMIN',
            'last_name' => 'RESENDIZ',
            'second_last_name' => 'ARREOLA',
            'email' => 'diego.resendiz@ldrsolutions.com.mx',
            'phone' => '0',
            'employee_number' => '240444',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'GUILLERMO',
            'middle_name' => 'GUADALUPE',
            'last_name' => 'LOPEZ',
            'second_last_name' => 'ESTRADA',
            'email' => null,
            'phone' => null,
            'employee_number' => '240445',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'PEDRO',
            'middle_name' => 'EMMANUEL',
            'last_name' => 'ARAUJO',
            'second_last_name' => 'LOMELI',
            'email' => null,
            'phone' => '0',
            'employee_number' => '240446',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'EDUARDO',
            'middle_name' => null,
            'last_name' => 'ALCALA',
            'second_last_name' => 'SANTILLAN',
            'email' => null,
            'phone' => null,
            'employee_number' => '240448',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'CARLOS',
            'middle_name' => 'BENJAMIN',
            'last_name' => 'GALVAN',
            'second_last_name' => 'RODRIGUEZ',
            'email' => null,
            'phone' => null,
            'employee_number' => '240449',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'RIGOBERTO',
            'middle_name' => null,
            'last_name' => 'VAZQUEZ',
            'second_last_name' => 'REYES',
            'email' => 'rigoberto.vazquez@ldrsolutions.com.mx',
            'phone' => '-',
            'employee_number' => '240451',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JULIO',
            'middle_name' => 'CESAR',
            'last_name' => 'LOPEZ',
            'second_last_name' => 'LOPEZ',
            'email' => 'julio.lopez@ldrsolutions.com.mx',
            'phone' => '-',
            'employee_number' => '240453',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'LENNON',
            'middle_name' => 'RICARDO',
            'last_name' => 'RUBIO',
            'second_last_name' => 'SORIANO',
            'email' => 'lennon.rubio@ldrsolutions.com.mx',
            'phone' => '0',
            'employee_number' => '240455',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'LUIS',
            'middle_name' => 'ALONSO',
            'last_name' => 'GRANADOS',
            'second_last_name' => 'JUAREZ',
            'email' => null,
            'phone' => null,
            'employee_number' => '240456',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'RAUL',
            'middle_name' => 'FELIX',
            'last_name' => 'TORRES',
            'second_last_name' => 'TORRES',
            'email' => 'raul.torres@ldrsolutions.com.mx',
            'phone' => null,
            'employee_number' => '240458',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'ADAN',
            'middle_name' => 'FRANCISCO',
            'last_name' => 'DE ALBA',
            'second_last_name' => 'HERNANDEZ',
            'email' => null,
            'phone' => null,
            'employee_number' => '240460',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'LUIS',
            'middle_name' => 'ENRIQUE',
            'last_name' => 'JUAREZ',
            'second_last_name' => 'TORAL',
            'email' => 'luis.juarez@ldrsolutions.com.mx',
            'phone' => '0',
            'employee_number' => '240461',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'FABIOLA',
            'middle_name' => null,
            'last_name' => 'BARRON',
            'second_last_name' => 'BENITEZ',
            'email' => null,
            'phone' => null,
            'employee_number' => '240463',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'DANIEL',
            'middle_name' => null,
            'last_name' => 'ALCANTARA',
            'second_last_name' => 'RODRIGUEZ',
            'email' => 'daniel.alcantara@ldrsolutions.com.mx',
            'phone' => '0',
            'employee_number' => '240464',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'YANIK',
            'middle_name' => null,
            'last_name' => 'PADUA',
            'second_last_name' => 'GONZALEZ',
            'email' => 'yanik.padua@ldrsolutions.com.mx',
            'phone' => '0',
            'employee_number' => '240465',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'LEOPOLDO',
            'middle_name' => null,
            'last_name' => 'ROMERO',
            'second_last_name' => 'GARCIA',
            'email' => 'leopoldo.romero@ldrsolutions.com.mx',
            'phone' => '-',
            'employee_number' => '240466',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JUAN',
            'middle_name' => 'ENRIQUE',
            'last_name' => 'ALMARAZ',
            'second_last_name' => 'MENDOZA',
            'email' => 'juan.almaraz@ldrsolutions.com.mx',
            'phone' => '-',
            'employee_number' => '240467',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JUAN',
            'middle_name' => 'JOSE',
            'last_name' => 'GARCIA',
            'second_last_name' => 'MONTIEL',
            'email' => 'juan.garcia@ldrsolutions.com.mx',
            'phone' => '0',
            'employee_number' => '240468',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'VICTOR',
            'middle_name' => null,
            'last_name' => 'HERNANDEZ',
            'second_last_name' => 'LOPEZ',
            'email' => 'victor.hernandez@ldrsolutions.com.mx',
            'phone' => null,
            'employee_number' => '240469',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JOSE',
            'middle_name' => 'JORGE ANTONIO',
            'last_name' => 'MARTINEZ',
            'second_last_name' => 'ROMERO',
            'email' => 'jose.martinez@ldrsolutions.com.mx',
            'phone' => '0',
            'employee_number' => '240470',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'TEODORO',
            'middle_name' => null,
            'last_name' => 'RAMOS',
            'second_last_name' => 'DURAN',
            'email' => 'teodoro.ramos@ldrsolutions.com.mx',
            'phone' => '0',
            'employee_number' => '240471',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'HUGO',
            'middle_name' => null,
            'last_name' => 'SANCHEZ',
            'second_last_name' => 'MARTINEZ',
            'email' => 'hugo.sanchez@ldrsolutions.com.mx',
            'phone' => '0',
            'employee_number' => '240472',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'IRIS',
            'middle_name' => 'DARIELA',
            'last_name' => 'YEPEZ',
            'second_last_name' => 'MIRANDA',
            'email' => null,
            'phone' => '-',
            'employee_number' => '240476',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'SERGIO',
            'middle_name' => 'EDUARDO',
            'last_name' => 'SOLIS',
            'second_last_name' => 'GUILA',
            'email' => null,
            'phone' => null,
            'employee_number' => '240479',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'VICTOR',
            'middle_name' => 'DANIEL',
            'last_name' => 'RAMOS',
            'second_last_name' => 'MENDOZA',
            'email' => 'daniel.ramos@ldrsolutions.com.mx',
            'phone' => '-',
            'employee_number' => '240480',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'ROBERTO',
            'middle_name' => null,
            'last_name' => 'DAVALOS',
            'second_last_name' => 'CASTILLO',
            'email' => 'roberto.davalos@ldrsolutions.com.mx',
            'phone' => null,
            'employee_number' => '240481',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JOSE',
            'middle_name' => 'OCTAVIANO',
            'last_name' => 'AVALOS',
            'second_last_name' => 'RODRIGUEZ',
            'email' => 'jose.avalos@ldrsolutions.com.mx',
            'phone' => '-',
            'employee_number' => '240482',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'DIANA',
            'middle_name' => 'LAURA',
            'last_name' => 'MARTINEZ',
            'second_last_name' => 'MIRANDA',
            'email' => 'laura.martinez@ldrsolutions.com.mx',
            'phone' => '-',
            'employee_number' => '240485',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'ISRAEL',
            'middle_name' => 'ROGELIO',
            'last_name' => 'ALCALA',
            'second_last_name' => 'MORALES',
            'email' => 'rogelio.alcala@ldrsolutions.com.mx',
            'phone' => '3311750442',
            'employee_number' => '240486',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'MERARI',
            'middle_name' => null,
            'last_name' => 'LIÑAN',
            'second_last_name' => 'CARBAJAL',
            'email' => 'merari.linan@ldrsolutions.com.mx',
            'phone' => '0',
            'employee_number' => '240488',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JULIO',
            'middle_name' => 'CESAR',
            'last_name' => 'CERVANTES',
            'second_last_name' => 'ESPITIA',
            'email' => 'cesar.cervantes@ldrsolutions.com.mx',
            'phone' => '0',
            'employee_number' => '240490',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JORGE',
            'middle_name' => 'ALBERTO',
            'last_name' => 'PEREZ SIETE',
            'second_last_name' => 'ARREDONDO',
            'email' => 'jorge.perez@ldrsolutions.com.mx',
            'phone' => '-',
            'employee_number' => '240492',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'ANTONIO',
            'middle_name' => 'DE JESUS',
            'last_name' => 'SOTELO',
            'second_last_name' => 'DE ANDA',
            'email' => null,
            'phone' => null,
            'employee_number' => '240494',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'ISAEL',
            'middle_name' => 'ISAIAS',
            'last_name' => 'BAUTISTA',
            'second_last_name' => 'LAGUNA',
            'email' => 'isael.bautista@ldrsolutions.com.mx',
            'phone' => '-',
            'employee_number' => '240495',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'URIEL',
            'middle_name' => 'MAURICIO',
            'last_name' => 'DEL ROSARIO',
            'second_last_name' => 'ROBLES',
            'email' => 'mauricio.rosario@ldrsolutions.com.mx',
            'phone' => '0',
            'employee_number' => '240496',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'ALEXANDRA',
            'middle_name' => null,
            'last_name' => 'GOMEZ',
            'second_last_name' => 'IBARRECHE',
            'email' => 'alexandra.gomez@ldrsolutions.com.mx',
            'phone' => '0',
            'employee_number' => '240497',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'MARIO',
            'middle_name' => 'ALVARO',
            'last_name' => 'PEREZ',
            'second_last_name' => 'GONZALEZ',
            'email' => 'mario.perez@ldrsolutions.com.mx',
            'phone' => '0',
            'employee_number' => '240498',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'FERNANDO',
            'middle_name' => null,
            'last_name' => 'AGUILAR',
            'second_last_name' => 'KURI',
            'email' => 'fernando.aguilar@ldrsolutions.com.mx',
            'phone' => '0',
            'employee_number' => '240499',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JUAN',
            'middle_name' => 'PABLO',
            'last_name' => 'MORENO',
            'second_last_name' => 'MARTINEZ',
            'email' => null,
            'phone' => null,
            'employee_number' => '240501',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JOSE',
            'middle_name' => 'EDUARDO',
            'last_name' => 'GALINDO',
            'second_last_name' => 'MEJIA',
            'email' => 'eduardo.galindo@ldrsolutions.com.mx',
            'phone' => null,
            'employee_number' => '240502',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'DANIELLA',
            'middle_name' => 'XCHEL',
            'last_name' => 'SILVA',
            'second_last_name' => 'SEGURA',
            'email' => 'daniella.silva@ldrsolutions.com.mx',
            'phone' => '0',
            'employee_number' => '240503',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'ALONDRA',
            'middle_name' => 'BERENICE',
            'last_name' => 'RODRIGUEZ',
            'second_last_name' => 'GARCIA',
            'email' => 'alondra.rodriguez@ldrsolutions.com.mx',
            'phone' => null,
            'employee_number' => '240505',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'VICTOR',
            'middle_name' => 'ARNULFO',
            'last_name' => 'TORRES',
            'second_last_name' => 'MEDINA',
            'email' => null,
            'phone' => null,
            'employee_number' => '240510',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'GERSON',
            'middle_name' => null,
            'last_name' => 'JUAREZ',
            'second_last_name' => 'PERRUSQUIA',
            'email' => 'gerson.juarez@ldrsolutions.com.mx',
            'phone' => null,
            'employee_number' => '240512',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'LUIS',
            'middle_name' => 'ISRAEL',
            'last_name' => 'ACEVEDO',
            'second_last_name' => 'SOTO',
            'email' => 'israel.acevedo@ldrsolutions.com.mx',
            'phone' => '-',
            'employee_number' => '240515',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'CHRISTIAN',
            'middle_name' => 'YAIR',
            'last_name' => 'REYES',
            'second_last_name' => 'GUARNEROS',
            'email' => 'christian.reyes@ldrsolutions.com.mx',
            'phone' => '1111',
            'employee_number' => '240516',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'TITO',
            'middle_name' => 'ARMANDO',
            'last_name' => 'DEL CARMEN',
            'second_last_name' => 'HERNANDEZ',
            'email' => 'armando.delcarmen@ldrsolutions.com.mx',
            'phone' => '0',
            'employee_number' => '240517',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'ALBERTO',
            'middle_name' => 'JIBRAN',
            'last_name' => 'BARRAGAN',
            'second_last_name' => 'HERNANDEZ',
            'email' => 'alberto.barragan@ldrsolutions.com.mx',
            'phone' => '0',
            'employee_number' => '240519',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'ABRAHAM',
            'middle_name' => null,
            'last_name' => 'HERNANDEZ',
            'second_last_name' => 'FERNANDEZ',
            'email' => 'abraham.hernandez@ldrsolutions.com.mx',
            'phone' => '0',
            'employee_number' => '240520',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'ENOC',
            'middle_name' => null,
            'last_name' => 'VAZQUEZ',
            'second_last_name' => 'SILVA',
            'email' => 'enoc.vazquez@ldrsolutions.com.mx',
            'phone' => '0',
            'employee_number' => '240521',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'AXEL',
            'middle_name' => null,
            'last_name' => 'GUZMAN',
            'second_last_name' => 'VALLEJO',
            'email' => 'axel.guzman@ldrsolutions.com.mx',
            'phone' => '0',
            'employee_number' => '240522',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'EDGAR',
            'middle_name' => null,
            'last_name' => 'APARICIO',
            'second_last_name' => 'COLIN',
            'email' => 'edgar.aparicio@ldrsolutions.com.mx',
            'phone' => '0',
            'employee_number' => '240523',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'EDUARDO',
            'middle_name' => null,
            'last_name' => 'CISNEROS',
            'second_last_name' => 'ALVARADO',
            'email' => 'eduardo.cisneros@ldrsolutions.com.mx',
            'phone' => '0',
            'employee_number' => '240524',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JONATHAN',
            'middle_name' => null,
            'last_name' => 'SILVERIO',
            'second_last_name' => 'DEL ANGEL',
            'email' => 'jonathan.silverio@ldrsolutions.com.mx',
            'phone' => null,
            'employee_number' => '240525',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'MARIO',
            'middle_name' => null,
            'last_name' => 'TORRES',
            'second_last_name' => 'PEREZ',
            'email' => null,
            'phone' => null,
            'employee_number' => '240529',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'LUIS',
            'middle_name' => 'FERNANDO',
            'last_name' => 'HERNANDEZ',
            'second_last_name' => 'MAGAÑA',
            'email' => null,
            'phone' => null,
            'employee_number' => '240534',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'OMAR',
            'middle_name' => null,
            'last_name' => 'ESCOBEDO',
            'second_last_name' => 'DOMINGUEZ',
            'email' => 'omar.escobedo@ldrsolutions.com.mx',
            'phone' => null,
            'employee_number' => '240535',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'LORENA',
            'middle_name' => null,
            'last_name' => 'RESENDIZ',
            'second_last_name' => 'GARCIA',
            'email' => null,
            'phone' => '-',
            'employee_number' => '240536',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JONATHAN',
            'middle_name' => 'URIEL',
            'last_name' => 'VAZQUEZ',
            'second_last_name' => 'CONTRERAS',
            'email' => 'jonathan.vazquez@ldrsolutions.com.mx',
            'phone' => null,
            'employee_number' => '240537',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'ALEJANDRO',
            'middle_name' => null,
            'last_name' => 'OLMEDO',
            'second_last_name' => 'RODRIGUEZ',
            'email' => 'alejandro.olmedo@ldrsolutions.com.m',
            'phone' => null,
            'employee_number' => '240538',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JESUS',
            'middle_name' => null,
            'last_name' => 'FARANGO',
            'second_last_name' => 'ANGELES',
            'email' => 'jesus.farango@ldrsolutions.com.mx',
            'phone' => '-',
            'employee_number' => '240539',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JENY',
            'middle_name' => 'ASTRID',
            'last_name' => 'SEBASTIAN',
            'second_last_name' => 'OCHOA',
            'email' => 'astrid.sebastian@ldrsolutions.com.mx',
            'phone' => '0',
            'employee_number' => '240542',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'PEDRO',
            'middle_name' => null,
            'last_name' => 'LEYVA',
            'second_last_name' => 'OJEDA',
            'email' => 'pedro.leyva@ldrsolutions.com.mx',
            'phone' => '0',
            'employee_number' => '240547',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'MARIO',
            'middle_name' => null,
            'last_name' => 'LOPEZ',
            'second_last_name' => 'FERNANDEZ',
            'email' => 'mario.lopez@ldrsolutions.com.mx',
            'phone' => '0',
            'employee_number' => '240548',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'ERICK',
            'middle_name' => 'ALEXIS',
            'last_name' => 'SANTANA',
            'second_last_name' => 'BALLESTEROS',
            'email' => 'tesoreria@ldrsolutions.com.mx',
            'phone' => null,
            'employee_number' => '240553',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'AMANDA',
            'middle_name' => 'MILDRED',
            'last_name' => 'VILLAGRAN',
            'second_last_name' => 'LOPEZ',
            'email' => 'amanda.villagran@ldrsolutions.com.mx',
            'phone' => 'SIN',
            'employee_number' => '240554',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'FRANCISCO',
            'middle_name' => 'HUMBERTO',
            'last_name' => 'MARTINEZ',
            'second_last_name' => 'RIOS',
            'email' => 'francisco.martinez@ldrsolutions.com.mx',
            'phone' => null,
            'employee_number' => '240555',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'RAMIRO',
            'middle_name' => null,
            'last_name' => 'GONZALEZ',
            'second_last_name' => 'SANCHEZ',
            'email' => 'ramiro.gonzalez@ldrsolutions.com.mx',
            'phone' => '0',
            'employee_number' => '240557',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'SARAHI',
            'middle_name' => null,
            'last_name' => 'MARTINEZ',
            'second_last_name' => 'JIMENEZ',
            'email' => 'sarahi.martinez@ldrsolutions.com.mx',
            'phone' => null,
            'employee_number' => '240558',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'EDGAR',
            'middle_name' => null,
            'last_name' => 'PIÑA',
            'second_last_name' => 'CRUZ',
            'email' => 'edgar.pina@ldrsolutions.com.mx',
            'phone' => '0',
            'employee_number' => '240559',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'VALERIA',
            'middle_name' => 'BEATRIZ',
            'last_name' => 'ORTIZ',
            'second_last_name' => 'MERCADO',
            'email' => 'valeria.ortiz@ldrsolutions.com.mx',
            'phone' => null,
            'employee_number' => '240560',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'LUIS',
            'middle_name' => 'ALBERTO',
            'last_name' => 'ORNELAS',
            'second_last_name' => 'SANDOVAL',
            'email' => 'luis.ornelas@ldrsolutions.com.mx',
            'phone' => '-',
            'employee_number' => '240561',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'LUIS',
            'middle_name' => 'JARED',
            'last_name' => 'ALBA',
            'second_last_name' => 'ESTRADA',
            'email' => null,
            'phone' => null,
            'employee_number' => '240562',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JOSE',
            'middle_name' => 'ARTURO',
            'last_name' => 'MUÑOZ',
            'second_last_name' => 'ANTIMO',
            'email' => null,
            'phone' => '474 175 47',
            'employee_number' => '240563',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'SHARON',
            'middle_name' => null,
            'last_name' => 'LEON',
            'second_last_name' => 'PEREZ',
            'email' => 'sharon.leon@ldrsolutions.com.mx',
            'phone' => null,
            'employee_number' => '240565',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'GLORIA',
            'middle_name' => null,
            'last_name' => 'TORRES',
            'second_last_name' => 'MORA',
            'email' => 'gloria.torres@ldrsolutions.com.mx',
            'phone' => '-',
            'employee_number' => '240566',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JOSE',
            'middle_name' => 'ALBERTO RAFAEL',
            'last_name' => 'PEREZ',
            'second_last_name' => 'MARTINEZ',
            'email' => null,
            'phone' => '-',
            'employee_number' => '240567',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'EDWIN',
            'middle_name' => 'GERARDO',
            'last_name' => 'ROJAS',
            'second_last_name' => 'RAMIREZ',
            'email' => null,
            'phone' => '-',
            'employee_number' => '240568',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'ISAAC',
            'middle_name' => 'DAVID',
            'last_name' => 'CASTILLO',
            'second_last_name' => 'TLACHIMATZI',
            'email' => null,
            'phone' => null,
            'employee_number' => '240570',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'MARTIN',
            'middle_name' => null,
            'last_name' => 'HERNANDEZ',
            'second_last_name' => 'GONZALEZ',
            'email' => 'martin.hernandez@ldrsolutions.com.mx',
            'phone' => 'SIN ASIGNA',
            'employee_number' => '240571',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'FAUSTO',
            'middle_name' => 'JOSE',
            'last_name' => 'URIBE',
            'second_last_name' => 'ABASCAL',
            'email' => 'fausto.uribe@ldrsolutions.com.mx',
            'phone' => '0',
            'employee_number' => '240572',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'OSCAR',
            'middle_name' => 'DANIEL',
            'last_name' => 'MARTINEZ',
            'second_last_name' => 'ORTIZ',
            'email' => null,
            'phone' => '-',
            'employee_number' => '240573',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'FREDI',
            'middle_name' => 'JAIR',
            'last_name' => 'RAMOS',
            'second_last_name' => 'HERNANDEZ',
            'email' => null,
            'phone' => null,
            'employee_number' => '240574',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'CARLOS',
            'middle_name' => 'FRANCISCO',
            'last_name' => 'MARTINEZ',
            'second_last_name' => 'ALVARADO',
            'email' => null,
            'phone' => null,
            'employee_number' => '240575',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JOSE',
            'middle_name' => 'ANGEL',
            'last_name' => 'LUCHO',
            'second_last_name' => 'ESTRADA',
            'email' => null,
            'phone' => null,
            'employee_number' => '240576',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JESUS',
            'middle_name' => 'ERANTHI',
            'last_name' => 'HIPOLITO',
            'second_last_name' => 'SALAS',
            'email' => null,
            'phone' => null,
            'employee_number' => '240577',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JOSE',
            'middle_name' => 'DE JESUS',
            'last_name' => 'MALDONADO',
            'second_last_name' => 'FLORES',
            'email' => 'jesus.maldonado@ldrenta.com',
            'phone' => null,
            'employee_number' => '240581',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'ALEJANDRA',
            'middle_name' => null,
            'last_name' => 'MONTERO',
            'second_last_name' => 'ALVAREZ',
            'email' => 'alejandra.montero@ldrsolutions.com.mx',
            'phone' => null,
            'employee_number' => '240583',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'SOFIA',
            'middle_name' => null,
            'last_name' => 'MENCHACA',
            'second_last_name' => 'WIESBACH',
            'email' => 'sofia.menchaca@ldrsolutions.com.mx',
            'phone' => '-',
            'employee_number' => '240585',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JONATHAN',
            'middle_name' => 'CRISTOBAL',
            'last_name' => 'DE DIOS',
            'second_last_name' => 'ROMO',
            'email' => null,
            'phone' => '-',
            'employee_number' => '240587',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'MARIANA',
            'middle_name' => null,
            'last_name' => 'ORTIZ',
            'second_last_name' => 'FRANCISCO',
            'email' => 'mariana.ortiz@ldrsolutions.com.mx',
            'phone' => '0',
            'employee_number' => '240588',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'OMAR',
            'middle_name' => null,
            'last_name' => 'MORALES',
            'second_last_name' => 'GOMORA',
            'email' => 'omar.morales@ldrsolutions.com.mx',
            'phone' => '0',
            'employee_number' => '240590',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'FELIX',
            'middle_name' => 'ANTONIO',
            'last_name' => 'BAZAN',
            'second_last_name' => 'BAUTISTA',
            'email' => 'felix.bazan@ldrsolutions.com.mx',
            'phone' => '5527578508',
            'employee_number' => '240594',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'LUIS',
            'middle_name' => 'GERARDO',
            'last_name' => 'ORTIZ',
            'second_last_name' => 'MARTINEZ',
            'email' => null,
            'phone' => null,
            'employee_number' => '240595',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'ELIZABETH',
            'middle_name' => null,
            'last_name' => 'MARQUEZ',
            'second_last_name' => 'MANCILLA',
            'email' => null,
            'phone' => null,
            'employee_number' => '240598',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'FRIDA',
            'middle_name' => null,
            'last_name' => 'CALZADA',
            'second_last_name' => 'LEVARIO',
            'email' => 'frida.calzada@ldrsolutions.com.mx',
            'phone' => null,
            'employee_number' => '240599',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'EUMIR',
            'middle_name' => 'EDUARDO',
            'last_name' => 'AGUILAR',
            'second_last_name' => 'MARTÍNEZ',
            'email' => 'eumir.aguilar@ldrsolutions.com.mx',
            'phone' => '0',
            'employee_number' => '240601',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'MAX',
            'middle_name' => 'EDUARDO',
            'last_name' => 'LINARES',
            'second_last_name' => 'SOLER',
            'email' => 'max.linares@ldrsolutions.com.mx',
            'phone' => '3331841899',
            'employee_number' => '240602',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'DIEGO',
            'middle_name' => null,
            'last_name' => 'RESENDIZ',
            'second_last_name' => 'RUIZ',
            'email' => 'diego.ruiz@ldrsolutions.com.mx',
            'phone' => '-',
            'employee_number' => '240603',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'FERNANDO',
            'middle_name' => 'LUCIANO',
            'last_name' => 'TORRES',
            'second_last_name' => 'GUERRA',
            'email' => null,
            'phone' => '-',
            'employee_number' => '240604',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JOSE',
            'middle_name' => 'LUIS',
            'last_name' => 'LEON',
            'second_last_name' => 'LUJAN',
            'email' => null,
            'phone' => null,
            'employee_number' => '240606',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'RODOLFO',
            'middle_name' => 'ALEJANDRO',
            'last_name' => 'JIMENEZ',
            'second_last_name' => 'HERNANDEZ',
            'email' => 'rodolfo.jimenez@ldrenta.com',
            'phone' => '0',
            'employee_number' => '240607',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JUAN',
            'middle_name' => 'CARLOS',
            'last_name' => 'GAMIÑO',
            'second_last_name' => 'MONTES',
            'email' => null,
            'phone' => null,
            'employee_number' => '240612',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'EMIR',
            'middle_name' => 'EMILIANO',
            'last_name' => 'TORRES',
            'second_last_name' => 'ARAUJO',
            'email' => null,
            'phone' => null,
            'employee_number' => '240615',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'HUGO',
            'middle_name' => 'RENE',
            'last_name' => 'CORTES',
            'second_last_name' => 'PORRAS',
            'email' => null,
            'phone' => '-',
            'employee_number' => '240616',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'ANDREA',
            'middle_name' => null,
            'last_name' => 'ESPINOSA',
            'second_last_name' => 'DANEL',
            'email' => 'andrea.espinosa@ldrsolutions.com.mx',
            'phone' => '-',
            'employee_number' => '240617',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'RODOLFO',
            'middle_name' => 'ELIAS',
            'last_name' => 'PARADA',
            'second_last_name' => 'GARCIA',
            'email' => 'rodolfo.parada@ldrsolutions.com.mx',
            'phone' => '0',
            'employee_number' => '240618',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'MARIA',
            'middle_name' => 'FERNANDA',
            'last_name' => 'MORA',
            'second_last_name' => 'VARGAS',
            'email' => 'maria.mora@ldrsolutions.com.mx',
            'phone' => '-',
            'employee_number' => '240619',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'LUIS',
            'middle_name' => 'AXEL',
            'last_name' => 'AGUILAR',
            'second_last_name' => 'AREVALO',
            'email' => 'luis.aguilar@ldrsolutions.com.mx',
            'phone' => '-',
            'employee_number' => '240620',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'BEATRIZ',
            'middle_name' => null,
            'last_name' => 'LIRA',
            'second_last_name' => 'GRANADOS',
            'email' => null,
            'phone' => '4427809997',
            'employee_number' => '240623',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'PEDRO',
            'middle_name' => 'DAMIAN',
            'last_name' => 'LIRA',
            'second_last_name' => 'GRANADOS',
            'email' => null,
            'phone' => null,
            'employee_number' => '240624',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JOSE',
            'middle_name' => 'ANTONIO',
            'last_name' => 'PEREZ',
            'second_last_name' => 'GONZALEZ',
            'email' => null,
            'phone' => null,
            'employee_number' => '240625',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'GERALDINE',
            'middle_name' => null,
            'last_name' => 'ANGULO',
            'second_last_name' => 'SOSA',
            'email' => 'geraldine.angulo@ldrsolutions.com.mx',
            'phone' => '-',
            'employee_number' => '240629',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'SALVADOR',
            'middle_name' => null,
            'last_name' => 'PORRAS',
            'second_last_name' => 'PEREZ',
            'email' => 'salvador.porras@ldrenta.com',
            'phone' => '4921037429',
            'employee_number' => '240630',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'ALBERTO',
            'middle_name' => 'ANGEL',
            'last_name' => 'MARTINEZ',
            'second_last_name' => 'GARCIA',
            'email' => 'alberto.martinez@ldrsolutions.com.mx',
            'phone' => '0',
            'employee_number' => '240631',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'FERMIN',
            'middle_name' => null,
            'last_name' => 'ALONSO',
            'second_last_name' => 'RIVERA',
            'email' => null,
            'phone' => '0',
            'employee_number' => '240632',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'FRANCISCO',
            'middle_name' => 'JAVIER',
            'last_name' => 'FRIAS',
            'second_last_name' => 'JIMENEZ',
            'email' => 'francisco.frias@ldrsolutions.com.mx',
            'phone' => null,
            'employee_number' => '240634',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'GUSTAVO',
            'middle_name' => null,
            'last_name' => 'ZAMORA',
            'second_last_name' => 'RAMIREZ',
            'email' => 'gustavo.zamora@ldrsolutions.com.mx',
            'phone' => null,
            'employee_number' => '240635',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'LAURENCIO',
            'middle_name' => null,
            'last_name' => 'GONZALEZ',
            'second_last_name' => 'CASTILLO',
            'email' => null,
            'phone' => null,
            'employee_number' => '240636',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'KEYLA',
            'middle_name' => 'EDITH',
            'last_name' => 'CASTRO',
            'second_last_name' => 'LOPEZ',
            'email' => 'keyla.castro@ldrsolutions.com.mx',
            'phone' => null,
            'employee_number' => '240638',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'ALAN',
            'middle_name' => 'EDUARDO',
            'last_name' => 'RIVERA',
            'second_last_name' => 'RODRIGUEZ',
            'email' => 'eduardo.rivera@ldrsolutions.com.mx',
            'phone' => null,
            'employee_number' => '240639',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'CARLOS',
            'middle_name' => null,
            'last_name' => 'REYES',
            'second_last_name' => 'MEDINA',
            'email' => 'carlos.reyes@ldrenta.com.mx',
            'phone' => null,
            'employee_number' => '240640',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JAVIER',
            'middle_name' => null,
            'last_name' => 'JIMENEZ',
            'second_last_name' => 'SALGADO',
            'email' => 'javier.jimenez@ldrsolutions.com.mx',
            'phone' => null,
            'employee_number' => '240641',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JUAN',
            'middle_name' => 'ANTONIO',
            'last_name' => 'HIPOLITO',
            'second_last_name' => 'ROBLEDO',
            'email' => null,
            'phone' => '-',
            'employee_number' => '240642',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'ARNULFO',
            'middle_name' => null,
            'last_name' => 'GOMEZ',
            'second_last_name' => 'GARCIA',
            'email' => null,
            'phone' => '-',
            'employee_number' => '240644',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JOSE',
            'middle_name' => 'LUIS',
            'last_name' => 'LOPEZ',
            'second_last_name' => 'JOAQUIN',
            'email' => 'joseluis.lopez@ldrsolutions.com.mx',
            'phone' => null,
            'employee_number' => '240645',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'AARON',
            'middle_name' => null,
            'last_name' => 'PILAR',
            'second_last_name' => 'CALTZONSI',
            'email' => null,
            'phone' => null,
            'employee_number' => '250647',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'BRYAN',
            'middle_name' => null,
            'last_name' => 'REYNA',
            'second_last_name' => 'MARTINEZ',
            'email' => null,
            'phone' => '-',
            'employee_number' => '250649',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'FELIX',
            'middle_name' => 'GABRIEL',
            'last_name' => 'GARCIA',
            'second_last_name' => 'GUERRA',
            'email' => null,
            'phone' => '-',
            'employee_number' => '250650',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'ANTONIO',
            'middle_name' => null,
            'last_name' => 'BARRERA',
            'second_last_name' => 'ALCANTARA',
            'email' => 'antonio.barrera@ldrsolutions.com.mx',
            'phone' => '-',
            'employee_number' => '250651',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'EVA',
            'middle_name' => 'ELIZABETH',
            'last_name' => 'LEON',
            'second_last_name' => 'MORALES',
            'email' => null,
            'phone' => '0',
            'employee_number' => '250652',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'SERGIO',
            'middle_name' => 'EFRAIN',
            'last_name' => 'MESA',
            'second_last_name' => 'CILIBERTI',
            'email' => 'sergio.mesa@ldrsolutions.com.mx',
            'phone' => null,
            'employee_number' => '250653',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'MIGUEL',
            'middle_name' => 'GUADALUPE',
            'last_name' => 'ESPINOSA',
            'second_last_name' => 'MARQUEZ',
            'email' => null,
            'phone' => '4741267147',
            'employee_number' => '250655',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'MIGUEL',
            'middle_name' => 'ANGEL',
            'last_name' => 'SANTOS',
            'second_last_name' => 'LAZARO',
            'email' => 'miguel.santos@ldrsolutions.com.mx',
            'phone' => '0',
            'employee_number' => '250656',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'ERIK',
            'middle_name' => null,
            'last_name' => 'LOPEZ',
            'second_last_name' => 'BOTELLO',
            'email' => 'erik.lopez@ldrsolutions.com.mx',
            'phone' => 'SIN ASIGNA',
            'employee_number' => '250659',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JOSE',
            'middle_name' => 'DE JESUS',
            'last_name' => 'HERNANDEZ',
            'second_last_name' => 'VALLEJO',
            'email' => null,
            'phone' => '4741121498',
            'employee_number' => '250662',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'RENE',
            'middle_name' => null,
            'last_name' => 'DIAZ',
            'second_last_name' => 'SANCHEZ',
            'email' => 'rene.diaz@ldrsolutions.com.mx',
            'phone' => '-',
            'employee_number' => '250663',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JOSE',
            'middle_name' => 'LUIS',
            'last_name' => 'DE LA ROSA',
            'second_last_name' => 'ALCARAZ',
            'email' => null,
            'phone' => null,
            'employee_number' => '250664',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'DAVID',
            'middle_name' => null,
            'last_name' => 'CAMARILLO',
            'second_last_name' => 'ALANIS',
            'email' => 'david.camarillo@ldrsolutions.com.mx',
            'phone' => null,
            'employee_number' => '250666',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'FRANCISCO',
            'middle_name' => 'JAVIER',
            'last_name' => 'ESPINO',
            'second_last_name' => 'NUÑEZ',
            'email' => null,
            'phone' => null,
            'employee_number' => '250667',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'ISAAC',
            'middle_name' => 'ISRAEL',
            'last_name' => 'SILVA',
            'second_last_name' => 'ESPARZA',
            'email' => null,
            'phone' => '-',
            'employee_number' => '250668',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'DAVID',
            'middle_name' => null,
            'last_name' => 'BERNAL',
            'second_last_name' => 'BERNAL',
            'email' => 'david.bernal@ldrsolutions.com.mx',
            'phone' => '0',
            'employee_number' => '250669',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'ISAAC',
            'middle_name' => 'EMMANUEL',
            'last_name' => 'PEREZ',
            'second_last_name' => 'ORTIZ',
            'email' => null,
            'phone' => '-',
            'employee_number' => '250670',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'SAMUEL',
            'middle_name' => 'ANTONIO',
            'last_name' => 'MARTINEZ',
            'second_last_name' => 'MONTELONGO',
            'email' => null,
            'phone' => '-',
            'employee_number' => '250671',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'RODOLFO',
            'middle_name' => null,
            'last_name' => 'RANGEL',
            'second_last_name' => 'CALVILLO',
            'email' => null,
            'phone' => '-',
            'employee_number' => '250673',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'ISRRAEL',
            'middle_name' => null,
            'last_name' => 'CALTENCO',
            'second_last_name' => 'ESPAÑA',
            'email' => 'isrrael.caltenco@ldrsolutions.com.mx',
            'phone' => null,
            'employee_number' => '250674',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'LUIS',
            'middle_name' => 'RAUL',
            'last_name' => 'BLANCO',
            'second_last_name' => 'CORONADO',
            'email' => null,
            'phone' => null,
            'employee_number' => '250675',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'RICARDO',
            'middle_name' => 'IVAN',
            'last_name' => 'GONZALEZ',
            'second_last_name' => 'MORENO',
            'email' => null,
            'phone' => '0',
            'employee_number' => '250676',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JOSE',
            'middle_name' => 'MANUEL',
            'last_name' => 'GARCIA',
            'second_last_name' => 'DIAZ',
            'email' => 'manuel.garcia@ldrsolutions.com.mx',
            'phone' => null,
            'employee_number' => '250677',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'DANIEL',
            'middle_name' => 'ISAI',
            'last_name' => 'JIMENEZ',
            'second_last_name' => 'LOPEZ',
            'email' => null,
            'phone' => null,
            'employee_number' => '250679',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JAVIER',
            'middle_name' => null,
            'last_name' => 'ROJAS',
            'second_last_name' => 'PEREZ',
            'email' => null,
            'phone' => '0',
            'employee_number' => '250681',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'VICTOR',
            'middle_name' => 'ALBERTO',
            'last_name' => 'REYES',
            'second_last_name' => 'ZERMEÑO',
            'email' => null,
            'phone' => '4741006802',
            'employee_number' => '250682',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'ANGEL',
            'middle_name' => 'SAMUEL',
            'last_name' => 'HERNANDEZ',
            'second_last_name' => 'PEREZ',
            'email' => null,
            'phone' => '-',
            'employee_number' => '250683',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'MARYLILYAN',
            'middle_name' => null,
            'last_name' => 'GUZMAN',
            'second_last_name' => 'HERRERA',
            'email' => 'marylilyan.guzman@ldrsolutions.com.mx',
            'phone' => '0',
            'employee_number' => '250684',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'URIEL',
            'middle_name' => null,
            'last_name' => 'CABELLO',
            'second_last_name' => 'SOSA',
            'email' => 'uriel.cabello@ldrsolutions.com.mx',
            'phone' => '0',
            'employee_number' => '250685',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'OSCAR',
            'middle_name' => null,
            'last_name' => 'DE LA CRUZ',
            'second_last_name' => 'GONZALEZ',
            'email' => null,
            'phone' => null,
            'employee_number' => '250686',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JOSE',
            'middle_name' => 'CARLOS',
            'last_name' => 'MARURE',
            'second_last_name' => 'CENA',
            'email' => 'jose.marure@ldrsolutions.com.mx',
            'phone' => '-',
            'employee_number' => '250687',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'AKETZALI',
            'middle_name' => null,
            'last_name' => 'ROSAS',
            'second_last_name' => 'ALVAREZ',
            'email' => 'aketzali.rosas@ldrsolutions.com.mx',
            'phone' => '222 818 81',
            'employee_number' => '250688',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'BERENICE',
            'middle_name' => 'BETSABE',
            'last_name' => 'SANCHEZ',
            'second_last_name' => 'GARCIA',
            'email' => 'berenice.sanchez@ldrsolutions.com.mx',
            'phone' => '0',
            'employee_number' => '250689',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'GUSTAVO',
            'middle_name' => null,
            'last_name' => 'TORRES',
            'second_last_name' => 'MARTINEZ',
            'email' => null,
            'phone' => '-',
            'employee_number' => '250690',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'ERIK',
            'middle_name' => 'MARTIN',
            'last_name' => 'TORRES',
            'second_last_name' => 'HERNANDEZ',
            'email' => null,
            'phone' => null,
            'employee_number' => '250692',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'MARTIN',
            'middle_name' => 'DE JESUS',
            'last_name' => 'PIÑA',
            'second_last_name' => 'ZAMARRIPA',
            'email' => null,
            'phone' => '4721878012',
            'employee_number' => '250693',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'LAURA',
            'middle_name' => 'MERCEDES',
            'last_name' => 'POBLETE',
            'second_last_name' => 'CORDOVA',
            'email' => 'laura.poblete@ldrsolutions.com.mx',
            'phone' => null,
            'employee_number' => '250694',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JOSE',
            'middle_name' => 'ALBERTO',
            'last_name' => 'NAVARRETE',
            'second_last_name' => 'REYES',
            'email' => 'alberto.navarrete@ldrsolutions.com.mx',
            'phone' => '0',
            'employee_number' => '250695',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'MARCO',
            'middle_name' => 'ANTONIO',
            'last_name' => 'ALFARO',
            'second_last_name' => 'MORENO',
            'email' => null,
            'phone' => '-',
            'employee_number' => '250696',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'GUILLERMO',
            'middle_name' => null,
            'last_name' => 'MONDRAGON',
            'second_last_name' => 'SOLTERO',
            'email' => null,
            'phone' => null,
            'employee_number' => '250697',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'FELIX',
            'middle_name' => null,
            'last_name' => 'DE LA CRUZ',
            'second_last_name' => 'RAMOS',
            'email' => 'felix.delacruz@ldrenta.com',
            'phone' => '-',
            'employee_number' => '250698',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JUAN',
            'middle_name' => 'CARLOS',
            'last_name' => 'GARCIA',
            'second_last_name' => 'OLMOS',
            'email' => null,
            'phone' => '-',
            'employee_number' => '250699',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JUAN',
            'middle_name' => 'PABLO',
            'last_name' => 'CORTES',
            'second_last_name' => 'GUERRA',
            'email' => null,
            'phone' => '-',
            'employee_number' => '250700',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'VICTOR',
            'middle_name' => 'ARNOLDO',
            'last_name' => 'SALGADO',
            'second_last_name' => 'GARCIA',
            'email' => 'victor.salgado@ldrsolutions.com.mx',
            'phone' => null,
            'employee_number' => '250701',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JOCELYN',
            'middle_name' => 'ALEJANDRA',
            'last_name' => 'BARRON',
            'second_last_name' => 'VARGAS',
            'email' => 'alejandra.barron@ldrsolutions.com.mx',
            'phone' => '552806665',
            'employee_number' => '250702',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JUAN',
            'middle_name' => 'FRANCISCO',
            'last_name' => 'VELEZ',
            'second_last_name' => 'MORENO',
            'email' => null,
            'phone' => '3321683763',
            'employee_number' => '250703',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'BRENDA',
            'middle_name' => 'LUZ',
            'last_name' => 'AGUIRRE',
            'second_last_name' => 'DURAN',
            'email' => 'luz.aguirre@ldrsolutions.com.mx',
            'phone' => '5534158344',
            'employee_number' => '250704',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JOSE',
            'middle_name' => 'MARCELINO',
            'last_name' => 'DIAZ',
            'second_last_name' => 'ALDANA',
            'email' => 'jose.diaz@ldrsolutions.com.mx',
            'phone' => '4741263670',
            'employee_number' => '250706',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'ALAN',
            'middle_name' => 'YAIR',
            'last_name' => 'FLORES',
            'second_last_name' => 'LOPEZ',
            'email' => 'yair.flores@ldrsolutions.com.mx',
            'phone' => '7341288934',
            'employee_number' => '250707',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'CESAR ',
            'middle_name' => 'OMAR ',
            'last_name' => 'VILLAFUERTE ',
            'second_last_name' => 'AVILA',
            'email' => 'almacen.lagos@ldrsolutions.com.mx',
            'phone' => '4741012329',
            'employee_number' => '250708',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JOSE',
            'middle_name' => 'RAUL ',
            'last_name' => 'TORRES',
            'second_last_name' => 'GUERRA',
            'email' => null,
            'phone' => '474 279 77',
            'employee_number' => '250709',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JOSE',
            'middle_name' => 'ANTONIO ',
            'last_name' => 'ROMERO ',
            'second_last_name' => 'MILLAN',
            'email' => null,
            'phone' => '33 1021 34',
            'employee_number' => '250712',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'GUADALUPE',
            'middle_name' => 'CESAR',
            'last_name' => 'SANTAMARIA',
            'second_last_name' => 'MARQUEZ',
            'email' => 'cesar.santamaria@ldrsolutions.com.mx',
            'phone' => '561391235',
            'employee_number' => '250713',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JESUS FERNANDO',
            'middle_name' => 'RENE',
            'last_name' => 'BAJO',
            'second_last_name' => 'VEGA',
            'email' => 'fernando.bajo@ldrsolutions.com.mx',
            'phone' => '668163503',
            'employee_number' => '250714',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'ISRAEL',
            'middle_name' => null,
            'last_name' => 'LOPEZ',
            'second_last_name' => 'PADILLA',
            'email' => 'israel.lopez@ldrsolutions.com.mx',
            'phone' => '5535550967',
            'employee_number' => '250716',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JOSE',
            'middle_name' => 'EDUARDO',
            'last_name' => 'CHAVEZ',
            'second_last_name' => 'CALDERON',
            'email' => 'eduardo.chavez@ldrsolutions.com.mx',
            'phone' => '44218709',
            'employee_number' => '250717',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JUAN',
            'middle_name' => 'MANUEL',
            'last_name' => 'CORREA',
            'second_last_name' => 'CONTRERAS',
            'email' => null,
            'phone' => '56455267',
            'employee_number' => '250720',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'LLUNELI',
            'middle_name' => null,
            'last_name' => 'ALCANTAR ',
            'second_last_name' => 'MORALES',
            'email' => 'lluneli.alcantar@ldrsolutions.com.mx',
            'phone' => '474 135 56',
            'employee_number' => '250721',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'MIGUEL',
            'middle_name' => 'ANGEL',
            'last_name' => 'ARELLANO ',
            'second_last_name' => 'GARCÍA',
            'email' => null,
            'phone' => '33 2954 84',
            'employee_number' => '250722',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'CHRISTIAN ',
            'middle_name' => 'JAVIER ',
            'last_name' => 'LOPEZ',
            'second_last_name' => 'REYES',
            'email' => null,
            'phone' => '474 207 48',
            'employee_number' => '250724',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'ISAIAS',
            'middle_name' => null,
            'last_name' => 'VEGA',
            'second_last_name' => 'TORRES',
            'email' => 'isaias.vega@ldrsolutions.com.mx',
            'phone' => '474 149 47',
            'employee_number' => '250725',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'ERIK',
            'middle_name' => 'JOSUE',
            'last_name' => 'CALVILLO ',
            'second_last_name' => 'SOTO',
            'email' => 'erik.calvillo @ldrsolutions.com.mx',
            'phone' => '474 100 18',
            'employee_number' => '250726',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'ALEJANDRA',
            'middle_name' => null,
            'last_name' => 'RAMOS',
            'second_last_name' => 'LIVERA',
            'email' => 'alejandra.ramos@ldrsolutions.com.mx',
            'phone' => '7226826714',
            'employee_number' => '250727',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'MARIAN',
            'middle_name' => null,
            'last_name' => 'MARTINEZ',
            'second_last_name' => 'GOMEZ',
            'email' => 'marian.martinez@ldrsolutions.com.mx',
            'phone' => '5585495548',
            'employee_number' => '250728',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'ABRAHAM',
            'middle_name' => null,
            'last_name' => 'CERON',
            'second_last_name' => 'BALTAZAR',
            'email' => 'abraham.ceron@ldrsolutions.com.mx',
            'phone' => '5510094817',
            'employee_number' => '250729',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JUSTINE',
            'middle_name' => 'KIMBERLEY ',
            'last_name' => 'SHAUNA',
            'second_last_name' => 'SOUDE',
            'email' => 'justine.soude@ldrsolutions.com.mx',
            'phone' => '5547834073',
            'employee_number' => '250730',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'BENITO',
            'middle_name' => null,
            'last_name' => 'VILLA',
            'second_last_name' => 'VELAZQUEZ',
            'email' => 'benito.villa@ldrsolutions.com.mx',
            'phone' => '5548477802',
            'employee_number' => '250731',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'CARLOS ',
            'middle_name' => 'PAUL',
            'last_name' => 'RAMIREZ ',
            'second_last_name' => 'CORNEJO ',
            'email' => null,
            'phone' => '33 3033 63',
            'employee_number' => '250732',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'CINTHIA ',
            'middle_name' => 'GUADALUPE ',
            'last_name' => 'FRANCO',
            'second_last_name' => 'MALDONADO ',
            'email' => null,
            'phone' => '4742078764',
            'employee_number' => '250733',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JESUS',
            'middle_name' => 'URIEL',
            'last_name' => 'CRUZ',
            'second_last_name' => 'LEON',
            'email' => 'jesus.cruz@ldrsolutions.com.mx',
            'phone' => '5581571149',
            'employee_number' => '250734',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'GERARDO',
            'middle_name' => null,
            'last_name' => 'HERNANDEZ',
            'second_last_name' => 'VALDERRAMA',
            'email' => null,
            'phone' => '4741757939',
            'employee_number' => '250735',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'FABRICIO',
            'middle_name' => null,
            'last_name' => 'LEYVAS',
            'second_last_name' => 'GARCIA',
            'email' => 'fabricio.leyvas@ldrsolutions.com.mx',
            'phone' => '55853363',
            'employee_number' => '250736',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'SALOMON',
            'middle_name' => null,
            'last_name' => 'HERNANDEZ',
            'second_last_name' => 'HERNANDEZ',
            'email' => 'salomon.hernandez@ldrsolutions.com.mx',
            'phone' => '7294908732',
            'employee_number' => '250737',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'MAHARBA',
            'middle_name' => 'DEL CARMEN',
            'last_name' => 'RUIZ',
            'second_last_name' => 'CELIS',
            'email' => 'maharba.ruiz@ldrsolutions.com.mx',
            'phone' => '9998021301',
            'employee_number' => '250738',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'VICTOR',
            'middle_name' => 'EMMANUEL',
            'last_name' => 'LOPEZ',
            'second_last_name' => 'MILLAN',
            'email' => 'victor.lopez@ldrsolutions.com.mx',
            'phone' => '7292957197',
            'employee_number' => '250739',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'HECTOR',
            'middle_name' => null,
            'last_name' => 'BALTAZAR',
            'second_last_name' => 'PEREZ',
            'email' => 'héctor.baltazar@ldrsolutions.com.mx',
            'phone' => '5512341026',
            'employee_number' => '250740',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'CRISTIAN',
            'middle_name' => 'JAIR',
            'last_name' => 'CONTRERAS',
            'second_last_name' => 'ALDANA',
            'email' => null,
            'phone' => '4747365230',
            'employee_number' => '250741',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'DANTE',
            'middle_name' => 'GUILLERMO',
            'last_name' => 'BARBA',
            'second_last_name' => 'HERNANDEZ',
            'email' => null,
            'phone' => '33 3320 03',
            'employee_number' => '250742',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'ALAIN',
            'middle_name' => 'ALEJANDRO',
            'last_name' => 'PEDROZA',
            'second_last_name' => 'PEREZ',
            'email' => 'alejandro.pedroza@ldrsolutions.com.mx',
            'phone' => '5553769513',
            'employee_number' => '250743',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'ARNULFO',
            'middle_name' => null,
            'last_name' => 'MALDONADO',
            'second_last_name' => 'GOMEZ',
            'email' => null,
            'phone' => '56 3840 97',
            'employee_number' => '250744',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'FELIPE',
            'middle_name' => 'ALFONSO',
            'last_name' => 'GOMEZ',
            'second_last_name' => 'RIVERA',
            'email' => 'felipe.gomez@ldrsolutions.com.mx',
            'phone' => '5516513766',
            'employee_number' => '250745',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'CLAUDIO',
            'middle_name' => null,
            'last_name' => 'ROBLES',
            'second_last_name' => 'RODRIGUEZ',
            'email' => 'claudio.robles@ldrsolutions.com.mx',
            'phone' => '7221579782',
            'employee_number' => '250746',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'ALEJANDRO',
            'middle_name' => null,
            'last_name' => 'HERNANDEZ',
            'second_last_name' => 'CAMPOS',
            'email' => 'alejandro.hernandez@ldrsolutions.com.mx',
            'phone' => '5563196663',
            'employee_number' => '250747',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'ADRIANA',
            'middle_name' => null,
            'last_name' => 'PARDIÑAS',
            'second_last_name' => 'GUERRERO',
            'email' => 'adriana.pardinas@ldrsolutions.com.mx',
            'phone' => '7221228118',
            'employee_number' => '250748',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'OCTAVIO',
            'middle_name' => null,
            'last_name' => 'MENDIOLA',
            'second_last_name' => 'VARGAS',
            'email' => 'octavio. mendiola@ldrsolutions.com.mx',
            'phone' => '5633000775',
            'employee_number' => '250749',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'HUMBERTO',
            'middle_name' => 'ZAID',
            'last_name' => 'SANROMAN',
            'second_last_name' => 'OLIVARES',
            'email' => null,
            'phone' => '474 126 75',
            'employee_number' => '250750',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JUAN',
            'middle_name' => 'CARLOS',
            'last_name' => 'GRANADOS',
            'second_last_name' => 'TORRES',
            'email' => 'juan.granados@ldrsolutions.com.mx',
            'phone' => '448 120 20',
            'employee_number' => '250751',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'CYNTHIA',
            'middle_name' => 'BEATRIZ',
            'last_name' => 'SILVA',
            'second_last_name' => 'MANSO',
            'email' => 'cynthia.silva@ldrsolutions.com.mx',
            'phone' => '552018176',
            'employee_number' => '250752',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'PEDRO',
            'middle_name' => null,
            'last_name' => 'MARTINEZ',
            'second_last_name' => 'CUEVAS',
            'email' => null,
            'phone' => '474 102 21',
            'employee_number' => '250753',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'HECTOR',
            'middle_name' => 'EDUARDO',
            'last_name' => 'RAMIREZ',
            'second_last_name' => 'LOPEZ',
            'email' => null,
            'phone' => '4741083397',
            'employee_number' => '250754',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'CUITLAHUAC',
            'middle_name' => 'AZAEL',
            'last_name' => 'HERNANDEZ',
            'second_last_name' => 'URRUTIA',
            'email' => 'azael.hernandez@ldrsolutions.com.mx',
            'phone' => '5586780563',
            'employee_number' => '250755',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'ANGEL',
            'middle_name' => 'GERSAIN',
            'last_name' => 'HERRERA',
            'second_last_name' => 'ZARATE',
            'email' => 'angel.herrera@ldrenta.com',
            'phone' => '3323129712',
            'employee_number' => '250756',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'ELVIRA',
            'middle_name' => null,
            'last_name' => 'HERNANDEZ',
            'second_last_name' => 'MARTINEZ',
            'email' => 'elvira.hernandez@ldrsolutions.com.mx',
            'phone' => '5531215716',
            'employee_number' => '250757',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'MARIANA',
            'middle_name' => null,
            'last_name' => 'PEREZ',
            'second_last_name' => 'JUAREZ',
            'email' => 'mariana.perez@ldrsolutions.com.mx',
            'phone' => '7298186167',
            'employee_number' => '250758',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'YARITZA',
            'middle_name' => 'FERNANDA',
            'last_name' => 'CADENA',
            'second_last_name' => 'VALLE',
            'email' => 'yaritza.cadena@ldrsolutions.com.mx',
            'phone' => '4732062494',
            'employee_number' => '250759',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JENNIFER',
            'middle_name' => null,
            'last_name' => 'REA',
            'second_last_name' => 'ROJAS',
            'email' => 'jennifer.rea@ldrsolutions.com.mx',
            'phone' => '7293662811',
            'employee_number' => '250760',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'CARLOS',
            'middle_name' => null,
            'last_name' => 'CRUZ',
            'second_last_name' => 'CASTAÑEDA',
            'email' => 'carlos.cruz@ldrsolutions.com.mx',
            'phone' => '5572227706',
            'employee_number' => '250761',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'MIRIAM',
            'middle_name' => null,
            'last_name' => 'MORENO',
            'second_last_name' => 'MOLINA',
            'email' => 'miriam.moreno@ldrsolutions.com.mx',
            'phone' => '2215864471',
            'employee_number' => '250762',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'ARIADNA',
            'middle_name' => null,
            'last_name' => 'GOMEZ',
            'second_last_name' => 'RAMIREZ',
            'email' => 'ariadna.gomez@ldrsolutions.com.mx',
            'phone' => '833 294 68',
            'employee_number' => '250763',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JORGE',
            'middle_name' => 'RICARDO',
            'last_name' => 'GIL',
            'second_last_name' => 'RIZO',
            'email' => 'ricardo.gil@ldrsolutions.com.mx',
            'phone' => '55 1090 92',
            'employee_number' => '250764',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'ANDREA',
            'middle_name' => null,
            'last_name' => 'FERNANDEZ',
            'second_last_name' => 'BARROETA',
            'email' => 'andrea.fernandez@ldrsolutions.com.mx',
            'phone' => '5529405206',
            'employee_number' => '250765',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'OCTAVIO',
            'middle_name' => 'ALBERTO',
            'last_name' => 'QUINTO',
            'second_last_name' => 'GUADALUPE',
            'email' => 'octavio.quinto@ldrsolutions.com.mx',
            'phone' => '5611731203',
            'employee_number' => '250766',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'KIMBERLY',
            'middle_name' => 'BERENICE',
            'last_name' => 'LICONA',
            'second_last_name' => 'GARCIA',
            'email' => 'kimberly.licona.@ldrsolutions.com.mx',
            'phone' => '5611934591',
            'employee_number' => '250767',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'MARIELA',
            'middle_name' => 'ISABEL',
            'last_name' => 'MEJIA',
            'second_last_name' => 'MARTEL',
            'email' => 'isabel.mejia@ldrsolutions.com.mx',
            'phone' => '83341374',
            'employee_number' => '250768',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'LIZBETH',
            'middle_name' => null,
            'last_name' => 'MAYA',
            'second_last_name' => 'RAMOS',
            'email' => 'lizbeth.maya@ldrsolutions.com.mx',
            'phone' => '5537611635',
            'employee_number' => '250769',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JAIME ',
            'middle_name' => 'EMILIANO',
            'last_name' => 'TORRES',
            'second_last_name' => 'GUERRA',
            'email' => null,
            'phone' => '4741013375',
            'employee_number' => '250770',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JOSE',
            'middle_name' => 'DANIEL',
            'last_name' => 'PEREZ',
            'second_last_name' => 'LOPEZ',
            'email' => null,
            'phone' => '4741480194',
            'employee_number' => '250771',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'CITLALLI',
            'middle_name' => 'ALEJANDRA',
            'last_name' => 'DELGADO',
            'second_last_name' => 'HERNANDEZ',
            'email' => 'citlalli_delgado@ldrsolutions.com.mx',
            'phone' => '474 74 770',
            'employee_number' => '250772',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JOSE',
            'middle_name' => 'ANTONIO',
            'last_name' => 'GARCIA',
            'second_last_name' => 'HERNANDEZ',
            'email' => 'jose.garcia@ldrsolutions.com.mx',
            'phone' => '5520041558',
            'employee_number' => '250773',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'HERIBERTO',
            'middle_name' => null,
            'last_name' => 'SANCHEZ',
            'second_last_name' => 'JIMENEZ',
            'email' => null,
            'phone' => '44218709',
            'employee_number' => '250774',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'ANGEL',
            'middle_name' => 'JAYR',
            'last_name' => 'VELAZQUEZ',
            'second_last_name' => 'ESCOBEDO',
            'email' => null,
            'phone' => '474 112 11',
            'employee_number' => '250775',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'HECTOR',
            'middle_name' => 'ULISES',
            'last_name' => 'ORNELAS',
            'second_last_name' => 'VENEGAS',
            'email' => null,
            'phone' => '33 1837 13',
            'employee_number' => '250776',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'ERIKA',
            'middle_name' => null,
            'last_name' => 'CORTES',
            'second_last_name' => 'BELLO',
            'email' => 'erika.cortes@ldrsolutions.com.mx',
            'phone' => '5618481208',
            'employee_number' => '250777',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'LUIS',
            'middle_name' => 'ALBERTO',
            'last_name' => 'QUIÑONEZ',
            'second_last_name' => 'LOMELI',
            'email' => 'alberto.quinonez@ldrenta.com',
            'phone' => '33116443',
            'employee_number' => '250778',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'FANNY',
            'middle_name' => 'CAROLINA',
            'last_name' => 'LOPEZ',
            'second_last_name' => 'AVALOS',
            'email' => 'carolina.lopez@ldrenta.com',
            'phone' => '6863579180',
            'employee_number' => '250779',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JUAN',
            'middle_name' => 'MANUEL',
            'last_name' => 'FRANCO',
            'second_last_name' => 'ALMAZAN',
            'email' => 'juan.franco@ldrsolutions.com.mx',
            'phone' => '4917546709',
            'employee_number' => '250780',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'LEONARDO',
            'middle_name' => null,
            'last_name' => 'APOLINAR',
            'second_last_name' => 'VARGAS',
            'email' => 'leonardo.apolinar@ldrenta.com',
            'phone' => '3345157058',
            'employee_number' => '250781',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JAVIER',
            'middle_name' => 'ANTONIO',
            'last_name' => 'VILLAFUERTE',
            'second_last_name' => 'ALMARAZ',
            'email' => 'javier.villafuerte@ldrsolutions.com.mx',
            'phone' => '5523290478',
            'employee_number' => '250782',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'FRANCISCO',
            'middle_name' => null,
            'last_name' => 'ROMERO',
            'second_last_name' => 'ORDOÑEZ',
            'email' => 'francisco.romero@ldrsolutions.com.mx',
            'phone' => '7294900466',
            'employee_number' => '250783',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'YASMIN',
            'middle_name' => null,
            'last_name' => 'HERNANDEZ',
            'second_last_name' => 'FERNANDEZ',
            'email' => 'yasmin.hernandez@ldrsolutions.com.mx',
            'phone' => '7293584651',
            'employee_number' => '250784',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'KAREN',
            'middle_name' => null,
            'last_name' => 'DOMINGUEZ',
            'second_last_name' => 'REYES',
            'email' => 'karen.dominguez@ldrsolutions.com.mx',
            'phone' => '7292646125',
            'employee_number' => '250785',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'LEOPOLDO',
            'middle_name' => null,
            'last_name' => 'ORTEGA',
            'second_last_name' => 'LOPEZ',
            'email' => 'leopoldo.ortega@ldrsolutions.com.mx',
            'phone' => '5527069625',
            'employee_number' => '250786',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'MELISA',
            'middle_name' => null,
            'last_name' => 'ALVAREZ',
            'second_last_name' => 'ROSALES',
            'email' => 'melisa.alvarez@ldrsolutions.com.mx',
            'phone' => '7227984317',
            'employee_number' => '250787',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'MARLENE',
            'middle_name' => null,
            'last_name' => 'VILLASEÑOR',
            'second_last_name' => 'VALENCIA',
            'email' => 'marlene.villasenor@ldrsolutions.com.mx',
            'phone' => '5640041939',
            'employee_number' => '250788',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'DIANA',
            'middle_name' => 'ELSA',
            'last_name' => 'GOMEZ',
            'second_last_name' => 'SEGURA',
            'email' => null,
            'phone' => '4742079686',
            'employee_number' => '250789',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'ALEXIA',
            'middle_name' => 'MAYRA',
            'last_name' => 'SALDAÑA',
            'second_last_name' => 'TORRIJOS',
            'email' => 'alexia.saldana@ldrsolutions.com.mx',
            'phone' => '7223694431',
            'employee_number' => '250790',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JUAN',
            'middle_name' => 'JOSE MARTIN',
            'last_name' => 'PEREZ',
            'second_last_name' => 'MARTINEZ',
            'email' => null,
            'phone' => '4747364929',
            'employee_number' => '250791',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'VICTOR',
            'middle_name' => 'MANUEL',
            'last_name' => 'CUENCA',
            'second_last_name' => 'MENDOZA',
            'email' => 'victor.cuenca@ldrsolutions.com.mx',
            'phone' => '5652568128',
            'employee_number' => '250792',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'LEONEL',
            'middle_name' => null,
            'last_name' => 'CEFERINO',
            'second_last_name' => 'BORJA',
            'email' => null,
            'phone' => '442 560 60',
            'employee_number' => '250793',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'NADIA',
            'middle_name' => 'PAOLA',
            'last_name' => 'SOTELO',
            'second_last_name' => 'GUTIERREZ',
            'email' => 'practicante.sgc@ldrsolutions.com.mx',
            'phone' => '3957835320',
            'employee_number' => '250794',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'GABRIEL',
            'middle_name' => null,
            'last_name' => 'CORTES',
            'second_last_name' => 'SANCHEZ',
            'email' => 'gabriel.cortes@ldrsolutions.com.mx',
            'phone' => '5645793418',
            'employee_number' => '250795',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'ERICK',
            'middle_name' => 'GUSTAVO',
            'last_name' => 'BONILLA',
            'second_last_name' => 'MONDRAGON',
            'email' => 'erick.bonilla@ldrsolutions.com.mx',
            'phone' => '3321639272',
            'employee_number' => '250796',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'MARCO',
            'middle_name' => 'ANTONIO',
            'last_name' => 'RUIZ',
            'second_last_name' => 'OTRERA',
            'email' => 'marco.ruiz@ldrenta.com',
            'phone' => '56 5893 26',
            'employee_number' => '250797',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'PEDRO',
            'middle_name' => 'ANDRES',
            'last_name' => 'AGUIRRE',
            'second_last_name' => 'TIJERINA',
            'email' => 'andres.aguirre@ldrsolutions.com.mx',
            'phone' => '8683735361',
            'employee_number' => '250798',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'DAYANA',
            'middle_name' => 'DE LOS ANGELES',
            'last_name' => 'CHIVICO',
            'second_last_name' => 'GUAINA',
            'email' => 'dayana.chivico@ldrsolutions.com.mx',
            'phone' => '782289904',
            'employee_number' => '250799',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JOSE',
            'middle_name' => 'ANGEL',
            'last_name' => 'VILLEGAS',
            'second_last_name' => 'ACOSTA',
            'email' => 'jose.villegas@ldrsolutions.com.mx',
            'phone' => '3313056582',
            'employee_number' => '250800',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'OSCAR',
            'middle_name' => null,
            'last_name' => 'CARRION',
            'second_last_name' => 'MUÑOZ',
            'email' => null,
            'phone' => '3329320701',
            'employee_number' => '250801',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'DANIELA',
            'middle_name' => 'RENEE',
            'last_name' => 'GOMEZ',
            'second_last_name' => 'BAEZA',
            'email' => 'renee.gomez@ldrsolutions.com.mx',
            'phone' => '5570533197',
            'employee_number' => '250802',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'EDGAR',
            'middle_name' => 'DANIEL',
            'last_name' => 'GONZALEZ',
            'second_last_name' => 'GODINEZ',
            'email' => null,
            'phone' => '3314443305',
            'employee_number' => '250803',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'MAURICIO',
            'middle_name' => null,
            'last_name' => 'CHICO',
            'second_last_name' => 'GONZALEZ',
            'email' => 'mauricio.chico@ldrsolutions.com.mx',
            'phone' => '722 292 79',
            'employee_number' => '250804',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JOSE',
            'middle_name' => 'MANUEL',
            'last_name' => 'PARRA',
            'second_last_name' => 'GARCIA',
            'email' => null,
            'phone' => '4741108263',
            'employee_number' => '250805',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'MARCO',
            'middle_name' => 'ANTONIO',
            'last_name' => 'ARANDA',
            'second_last_name' => 'LIMA',
            'email' => null,
            'phone' => '3333797741',
            'employee_number' => '250806',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'MARCO',
            'middle_name' => 'ANTONIO',
            'last_name' => 'CHAGOYA',
            'second_last_name' => 'ALANIS',
            'email' => 'marco.chagoya@ldrsolutions.com.mx',
            'phone' => '5636029617',
            'employee_number' => '250807',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'HERMENEGILDO',
            'middle_name' => null,
            'last_name' => 'MORENO',
            'second_last_name' => 'ARCHUNDIA',
            'email' => 'hermenegildo.moreno@ldrsolutions.com.mx',
            'phone' => '7226009036',
            'employee_number' => '250808',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JESICA',
            'middle_name' => 'SARAHI',
            'last_name' => 'MOLINA',
            'second_last_name' => 'SANTIAGO',
            'email' => 'jesica.molina@ldrsolutions.com.mx',
            'phone' => '5542008615',
            'employee_number' => '250809',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'ELIZABETH',
            'middle_name' => null,
            'last_name' => 'GARCIA',
            'second_last_name' => 'CASTILLO',
            'email' => 'elizabeth.garcia@ldrsolutions.com.mx',
            'phone' => '55321739',
            'employee_number' => '250810',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'SAUL',
            'middle_name' => null,
            'last_name' => 'DELGADILLO',
            'second_last_name' => 'ALCANTARA',
            'email' => 'saul.delgadillo@ldrsolutions.com.mx',
            'phone' => '5610557796',
            'employee_number' => '250811',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'ALAN',
            'middle_name' => 'RODRIGO',
            'last_name' => 'VAZQUEZ',
            'second_last_name' => 'PALMA',
            'email' => 'sinasignar',
            'phone' => '5621147318',
            'employee_number' => '250812',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'DANIELA',
            'middle_name' => null,
            'last_name' => 'GARCIA',
            'second_last_name' => 'ARRIAGA',
            'email' => 'daniela.arriaga@ldrsolutions.com.mx',
            'phone' => '5588281780',
            'employee_number' => '250813',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'ISAI',
            'middle_name' => null,
            'last_name' => 'NAVA',
            'second_last_name' => 'REYES',
            'email' => 'isai.nava@ldrsolutions.com.mx',
            'phone' => '9009901164',
            'employee_number' => '250814',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'MARIA',
            'middle_name' => 'DOLORES',
            'last_name' => 'NERIA',
            'second_last_name' => 'FLORES',
            'email' => null,
            'phone' => '5533584904',
            'employee_number' => '250815',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'MARCO',
            'middle_name' => 'ANTONIO',
            'last_name' => 'ACOSTA',
            'second_last_name' => 'TORRES',
            'email' => 'marco.acosta@ldrsolutions.com.mx',
            'phone' => '55 2855 74',
            'employee_number' => '250816',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'DAFNE',
            'middle_name' => 'MARIEL',
            'last_name' => 'ALCANTARA',
            'second_last_name' => 'TORRES',
            'email' => 'dafne.alcantara@ldrenta.com',
            'phone' => '0',
            'employee_number' => '250817',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'OSVALDO',
            'middle_name' => 'JAVIER',
            'last_name' => 'ESPARZA',
            'second_last_name' => 'ALDANA',
            'email' => 'practicante.rh@ldrsolutions.com.m',
            'phone' => '4741401243',
            'employee_number' => '250818',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'DANIELA',
            'middle_name' => 'MARIANA',
            'last_name' => 'ROSAS',
            'second_last_name' => 'HERNANDEZ',
            'email' => 'daniela.rosas@ldrsolutions.com.mx',
            'phone' => '5530069603',
            'employee_number' => '250819',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'NICOLAS',
            'middle_name' => null,
            'last_name' => 'DIAZ',
            'second_last_name' => 'ESPARZA',
            'email' => null,
            'phone' => '4741128561',
            'employee_number' => '250820',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'MIRIAM',
            'middle_name' => null,
            'last_name' => 'MENDOZA',
            'second_last_name' => 'MORA',
            'email' => 'miriam.mendoza@ldrsolutions.com.mx',
            'phone' => '722158963',
            'employee_number' => '250821',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'GABRIEL',
            'middle_name' => null,
            'last_name' => 'GARCIA',
            'second_last_name' => 'PEÑA',
            'email' => 'gabriel.garcia@ldrsolutions.com.mx',
            'phone' => '4421196589',
            'employee_number' => '250822',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'OSCAR',
            'middle_name' => 'DANIEL',
            'last_name' => 'APARICIO',
            'second_last_name' => 'TREJO',
            'email' => 'oscar.aparicio@ldrsolutions.com.mx',
            'phone' => '7751414480',
            'employee_number' => '250823',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'CARLOS',
            'middle_name' => null,
            'last_name' => 'GONZALEZ',
            'second_last_name' => 'GARDUZA',
            'email' => null,
            'phone' => '4741267329',
            'employee_number' => '250824',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'FABIOLA',
            'middle_name' => 'CECILIA',
            'last_name' => 'REYNOSO',
            'second_last_name' => 'REYES',
            'email' => 'cecilia.reynoso@ldrsolutions.com.mx',
            'phone' => '5618667933',
            'employee_number' => '250825',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JOEL',
            'middle_name' => 'JAIR',
            'last_name' => 'MARTINEZ',
            'second_last_name' => 'HERNANDEZ',
            'email' => 'joel.martinez@ldrsolutions.com.mx',
            'phone' => '5611215390',
            'employee_number' => '250826',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'DANIEL',
            'middle_name' => 'ENRIQUE',
            'last_name' => 'JUAREZ',
            'second_last_name' => 'RAMOS',
            'email' => 'daniel.juarez@ldrsolutions.com.mx',
            'phone' => '3907881067',
            'employee_number' => '250827',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'DANIEL',
            'middle_name' => null,
            'last_name' => 'GONZALEZ',
            'second_last_name' => 'PEREZ',
            'email' => null,
            'phone' => '4741403218',
            'employee_number' => '250828',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'CESAR',
            'middle_name' => 'ALBERTO',
            'last_name' => 'GODINEZ',
            'second_last_name' => 'CASILLAS',
            'email' => 'cesar.godinez@ldrenta.com',
            'phone' => '3331837545',
            'employee_number' => '250829',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'MIRIAM',
            'middle_name' => null,
            'last_name' => 'MENDOZA',
            'second_last_name' => 'MENDEZ',
            'email' => 'miriam.mendez@ldrsolutions.com.mx',
            'phone' => '5542777347',
            'employee_number' => '250830',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'ALEXIS',
            'middle_name' => null,
            'last_name' => 'CARRIOLA',
            'second_last_name' => 'CAREAGA',
            'email' => 'alexis.carriola@ldrsolutions.com.mx',
            'phone' => '7229808949',
            'employee_number' => '250831',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'RAILI',
            'middle_name' => 'ELIZABETH',
            'last_name' => 'ALMARAZ',
            'second_last_name' => 'RESENDIZ',
            'email' => 'raili.almaraz@ldrsolutions.com.mx',
            'phone' => '5514552288',
            'employee_number' => '250832',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'RAMIRO',
            'middle_name' => null,
            'last_name' => 'REYES',
            'second_last_name' => 'MUÑOZ',
            'email' => null,
            'phone' => '4741123763',
            'employee_number' => '250833',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'MAURICIO',
            'middle_name' => null,
            'last_name' => 'RIOS',
            'second_last_name' => 'PEDROZA',
            'email' => null,
            'phone' => '3311757345',
            'employee_number' => '250834',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JAVIER',
            'middle_name' => null,
            'last_name' => 'SANTOS',
            'second_last_name' => 'SOTO',
            'email' => null,
            'phone' => '4741341691',
            'employee_number' => '250835',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JOSE',
            'middle_name' => 'ANDRES',
            'last_name' => 'ARRANGOIZ',
            'second_last_name' => 'GARCIA',
            'email' => 'andres.arrangoiz@ldrsolutions.com.mx',
            'phone' => '5625856224',
            'employee_number' => '250836',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'CHRISTIAN',
            'middle_name' => 'DANIEL',
            'last_name' => 'ROMERO',
            'second_last_name' => 'MARTINEZ',
            'email' => null,
            'phone' => '4747490517',
            'employee_number' => '250837',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'GUSTAVO',
            'middle_name' => 'ALEJANDRO',
            'last_name' => 'JUAREZ',
            'second_last_name' => 'RUBIO',
            'email' => 'alejandro.juarez@ldrsolutions.com.mx',
            'phone' => '5523148590',
            'employee_number' => '250838',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'ANA',
            'middle_name' => null,
            'last_name' => 'GONZALEZ',
            'second_last_name' => 'GARCIA',
            'email' => null,
            'phone' => '5535356576',
            'employee_number' => '250839',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JESUS',
            'middle_name' => 'ENRIQUE',
            'last_name' => 'SANCHEZ',
            'second_last_name' => 'VEGA',
            'email' => 'no aplica',
            'phone' => '55771244',
            'employee_number' => '250840',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'CARLOS',
            'middle_name' => 'ALFREDO',
            'last_name' => 'SANCHEZ',
            'second_last_name' => 'CRUZ',
            'email' => 'alfredo.sanchez@ldrsolutions.com.mx',
            'phone' => '5643169832',
            'employee_number' => '250841',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'BRYAN',
            'middle_name' => 'ALEJANDRO',
            'last_name' => 'REYES',
            'second_last_name' => 'ZERMEÑO',
            'email' => null,
            'phone' => '4741064647',
            'employee_number' => '250842',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'SHARON',
            'middle_name' => 'LIZBETH',
            'last_name' => 'CARAVEO',
            'second_last_name' => 'CARRILLO',
            'email' => 'sharon.caraveo@ldrsolutions.com.mx',
            'phone' => '55438932',
            'employee_number' => '250843',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'FROILAN',
            'middle_name' => 'RAMON',
            'last_name' => 'MERCADO',
            'second_last_name' => 'GUTIERREZ',
            'email' => 'ramon.gutierrez@ldrsolutions.com.mx',
            'phone' => '4464246926',
            'employee_number' => '250844',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'AIDEE',
            'middle_name' => 'VIOLETA',
            'last_name' => 'CONTRERAS',
            'second_last_name' => 'HERNANDEZ',
            'email' => null,
            'phone' => '5624682621',
            'employee_number' => '250845',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'LUIS',
            'middle_name' => 'OSBALDO',
            'last_name' => 'SANCHEZ',
            'second_last_name' => 'PEREZ',
            'email' => 'supervisor.planta3@ldrsolutions.com.mx',
            'phone' => '3319860457',
            'employee_number' => '250846',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JUAN',
            'middle_name' => 'RUBEN',
            'last_name' => 'RAMOS',
            'second_last_name' => 'RAMIREZ',
            'email' => null,
            'phone' => '3343699962',
            'employee_number' => '250847',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'MARGARITA',
            'middle_name' => 'MICHEL',
            'last_name' => 'ARROYO',
            'second_last_name' => 'GALENA',
            'email' => null,
            'phone' => '5525305653',
            'employee_number' => '250848',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'EDUARDO',
            'middle_name' => null,
            'last_name' => 'BAUTISTA',
            'second_last_name' => 'CARDONA',
            'email' => null,
            'phone' => '8141375969',
            'employee_number' => '250849',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'ALEJANDRA',
            'middle_name' => null,
            'last_name' => 'SANCHEZ',
            'second_last_name' => 'RODRIGUEZ',
            'email' => 'alejandra.sanchez@ldrsolutions.com.mx',
            'phone' => '7221009814',
            'employee_number' => '250850',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'GABRIEL',
            'middle_name' => null,
            'last_name' => 'SANCHEZ',
            'second_last_name' => 'OROZCO',
            'email' => 'gabriel.sanchez@ldrsolutions.com.mx',
            'phone' => '5544623289',
            'employee_number' => '250851',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'LUIS',
            'middle_name' => 'ANGEL',
            'last_name' => 'ESPINOZA',
            'second_last_name' => 'MAURO',
            'email' => 'luis.espinoza@ldrsolutions.com.mx',
            'phone' => '7291623408',
            'employee_number' => '250852',
            'password' => Hash::make('password'),
            'user_type' => 3,
        ]);

        User::create([
            'first_name' => 'FERNANDO',
            'middle_name' => 'JESUS',
            'last_name' => 'CRUZ',
            'second_last_name' => 'BAUTISTA',
            'email' => 'fernando.cruz@ldrsolutions.com.mx',
            'phone' => '5621403485',
            'employee_number' => '250853',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'EDNA',
            'middle_name' => 'DAFNE',
            'last_name' => 'SANTANA',
            'second_last_name' => 'MALDONADO',
            'email' => 'dafne.santana@ldrsolutions.com.mx',
            'phone' => '5630109014',
            'employee_number' => '250854',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JESUS',
            'middle_name' => null,
            'last_name' => 'ADAME',
            'second_last_name' => 'SANDOVAL',
            'email' => 'jesus.adame@ldrsolutions.com.mx',
            'phone' => '5517829561',
            'employee_number' => '250855',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'EDGAR',
            'middle_name' => null,
            'last_name' => 'SILVA',
            'second_last_name' => 'SOTO',
            'email' => 'edgar.silva@ldrsolutions.com.mx',
            'phone' => '5514762788',
            'employee_number' => '250856',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'IVAN',
            'middle_name' => 'ALEJANDRO',
            'last_name' => 'ORNELAS',
            'second_last_name' => 'REGALADO',
            'email' => 'ivan.ornelas@ldrsolutions.com.mx',
            'phone' => '3331483050',
            'employee_number' => '250857',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'ALFREDO',
            'middle_name' => null,
            'last_name' => 'CARSOLIO',
            'second_last_name' => 'LARREA',
            'email' => 'alfredo.carsolio@ldrsolutions.com.mx',
            'phone' => '7224986220',
            'employee_number' => '250858',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'ALFREDO',
            'middle_name' => null,
            'last_name' => 'RANGEL',
            'second_last_name' => 'LARA',
            'email' => 'alfredo.rangel@ldrsolutions.com.mx',
            'phone' => '5586884478',
            'employee_number' => '250859',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'CLAUDIA',
            'middle_name' => 'YAZMIN',
            'last_name' => 'LOPEZ',
            'second_last_name' => 'ROMERO',
            'email' => 'claudia.lopez@ldrsolutions.com.mx',
            'phone' => '5530232297',
            'employee_number' => '250860',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'DANIELA',
            'middle_name' => null,
            'last_name' => 'SANCHEZ',
            'second_last_name' => 'RUBIO',
            'email' => 'daniela.sanchez@ldrsolutions.com.mx',
            'phone' => '5560935503',
            'employee_number' => '250861',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'DANIELA',
            'middle_name' => null,
            'last_name' => 'ZAMORA',
            'second_last_name' => 'MENDOZA',
            'email' => null,
            'phone' => '5580963196',
            'employee_number' => '250862',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'ERIKA',
            'middle_name' => 'ISABEL',
            'last_name' => 'WILLIAMS',
            'second_last_name' => 'PELLICO',
            'email' => 'erika.williams@ldrsolutions.com.mx',
            'phone' => '5530396364',
            'employee_number' => '250863',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'GABRIEL',
            'middle_name' => 'MARIA',
            'last_name' => 'DE URIARTE',
            'second_last_name' => 'OCCELLI',
            'email' => 'gabriel.deuriarte@ldrsolutions.com.mx',
            'phone' => '5514517729',
            'employee_number' => '250864',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'GUILLERMO',
            'middle_name' => null,
            'last_name' => 'HERNANDEZ',
            'second_last_name' => 'TORRES',
            'email' => 'guillermo.hernandez@ldrsolutions.com.mx',
            'phone' => '5535085768',
            'employee_number' => '250865',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'OMAR',
            'middle_name' => 'ISAAC',
            'last_name' => 'VALADEZ',
            'second_last_name' => 'GREGORIO',
            'email' => 'omar.valadez@ldrsolutions.com.mx',
            'phone' => '7223150213',
            'employee_number' => '250866',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JORGE',
            'middle_name' => null,
            'last_name' => 'HEREDIA',
            'second_last_name' => 'AMARO',
            'email' => 'jorge.amaro@ldrsolutions.com.mx',
            'phone' => '5569660623',
            'employee_number' => '250867',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'LINO',
            'middle_name' => 'TZILACATZIN',
            'last_name' => 'JASSO',
            'second_last_name' => 'CASAS',
            'email' => 'lino.jasso@ldrsolutions.com.mx',
            'phone' => '5536443764',
            'employee_number' => '250868',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'MIGUEL',
            'middle_name' => 'ANGEL',
            'last_name' => 'VALLEJO',
            'second_last_name' => 'ALVAREZ',
            'email' => 'miguel.vallejo@ldrsolutions.com.mx',
            'phone' => '4461180129',
            'employee_number' => '250869',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'GERARDO',
            'middle_name' => null,
            'last_name' => 'ARAMBULA',
            'second_last_name' => 'DIAZ',
            'email' => null,
            'phone' => '3351206865',
            'employee_number' => '250870',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'SALVADOR',
            'middle_name' => 'EXIQUIO',
            'last_name' => 'CHAVEZ',
            'second_last_name' => 'NAVARRO',
            'email' => 'salvador.chavez@ldrsolutions.com.mx',
            'phone' => '5541809103',
            'employee_number' => '250871',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'ANDREA',
            'middle_name' => null,
            'last_name' => 'HERNANDEZ',
            'second_last_name' => 'TORIS',
            'email' => 'andrea.hernandez@ldrsolutions.com.mx',
            'phone' => '5545764317',
            'employee_number' => '250872',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'MARGARITA',
            'middle_name' => null,
            'last_name' => 'SALINAS',
            'second_last_name' => 'MORALES',
            'email' => 'margarita.salinas@ldrsolutions.com.mx',
            'phone' => '442 426 20',
            'employee_number' => '250873',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'MIGUEL',
            'middle_name' => 'ANGEL',
            'last_name' => 'AVILA',
            'second_last_name' => 'RAMIREZ',
            'email' => 'miguel.avila@ldrsolutions.com.mx',
            'phone' => '5583275346',
            'employee_number' => '250874',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'CRISTIAN',
            'middle_name' => 'SAMIR',
            'last_name' => 'RODRIGUEZ',
            'second_last_name' => 'SANCHEZ',
            'email' => 'samir.rodriguez@ldrsolutions.com.mx',
            'phone' => '3323735932',
            'employee_number' => '250875',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'BRANDON',
            'middle_name' => 'JORDAN',
            'last_name' => 'GONZALEZ',
            'second_last_name' => 'SAAVEDRA',
            'email' => 'brandon.saavedra@ldrsolutions.com.mx',
            'phone' => '5555062123',
            'employee_number' => '250876',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JESUS',
            'middle_name' => 'ANGEL',
            'last_name' => 'CAMPOS',
            'second_last_name' => 'RAMIREZ',
            'email' => 'angel.campos@ldrsolutions.com.mx',
            'phone' => '5515363614',
            'employee_number' => '250877',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'LUIS',
            'middle_name' => 'ENRIQUE',
            'last_name' => 'LOPEZ',
            'second_last_name' => 'MENESES',
            'email' => 'luis.lopez@ldrsolutions.com.mx',
            'phone' => '5623388914',
            'employee_number' => '250878',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'DIEGO',
            'middle_name' => null,
            'last_name' => 'BERNAL',
            'second_last_name' => 'RUIZ',
            'email' => 'diego.bernal@ldrsolutions.com.mx',
            'phone' => '55391894',
            'employee_number' => '250879',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'NEREYDA',
            'middle_name' => 'MAURILIA',
            'last_name' => 'AGUIÑAGA',
            'second_last_name' => 'MORENO',
            'email' => 'auxiliar.juridico@ldrsolutions.com.mx',
            'phone' => '4741001309',
            'employee_number' => '250880',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'DULCE',
            'middle_name' => 'KARLA',
            'last_name' => 'MONTERO',
            'second_last_name' => 'JARAMILLO',
            'email' => 'dulce.montero@ldrsolutions.com.mx',
            'phone' => '5561559290',
            'employee_number' => '250881',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'CARLOS',
            'middle_name' => null,
            'last_name' => 'MARQUEZ',
            'second_last_name' => 'MONTOYA',
            'email' => 'coordinador.almacen@ldrsolutions.com.mx',
            'phone' => '4774014905',
            'employee_number' => '250882',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'LUIS',
            'middle_name' => 'FERNANDO',
            'last_name' => 'DELGADO',
            'second_last_name' => 'ESTRADA',
            'email' => null,
            'phone' => '4742065599',
            'employee_number' => '250883',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'MARIANA',
            'middle_name' => 'AZENETH',
            'last_name' => 'QUEZADA',
            'second_last_name' => 'PEREZ',
            'email' => 'mariana.quezada@ldrsolutions.com.mx',
            'phone' => '7293749817',
            'employee_number' => '250884',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JOSE',
            'middle_name' => null,
            'last_name' => 'RUIZ',
            'second_last_name' => 'ROSALES',
            'email' => null,
            'phone' => null,
            'employee_number' => '250885',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'ERIK',
            'middle_name' => 'DAVID',
            'last_name' => 'FRANCO',
            'second_last_name' => 'CANALES',
            'email' => 'david.franco@ldrsolutions.com.mx',
            'phone' => '5554940579',
            'employee_number' => '250886',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'ROGELIO',
            'middle_name' => 'ANTONIO',
            'last_name' => 'GONZALEZ',
            'second_last_name' => 'ALVAREZ',
            'email' => 'rogelio.gonzalez@ldrsolutions.com.mx',
            'phone' => '5588290358',
            'employee_number' => '250887',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JORGE',
            'middle_name' => 'ALBERTO',
            'last_name' => 'ESTOLANO',
            'second_last_name' => 'ROCHA',
            'email' => null,
            'phone' => '4444067799',
            'employee_number' => '250888',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JOSUE',
            'middle_name' => 'ALEXANDER',
            'last_name' => 'MACIAS',
            'second_last_name' => 'ORTIZ',
            'email' => null,
            'phone' => '4741125488',
            'employee_number' => '250889',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'RUBEN',
            'middle_name' => null,
            'last_name' => 'PEDROZA',
            'second_last_name' => 'RAMOS',
            'email' => null,
            'phone' => '4741918293',
            'employee_number' => '250890',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'RIGOBERTO',
            'middle_name' => null,
            'last_name' => 'FACIO',
            'second_last_name' => 'FACIO',
            'email' => null,
            'phone' => '4741129269',
            'employee_number' => '250891',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JOSE',
            'middle_name' => 'DE JESUS',
            'last_name' => 'HUERTA',
            'second_last_name' => 'MUÑOZ',
            'email' => null,
            'phone' => '4741119821',
            'employee_number' => '250892',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'MARIO',
            'middle_name' => 'EDUARDO',
            'last_name' => 'VALADEZ',
            'second_last_name' => 'VAZQUEZ',
            'email' => 'mario.valadez@ldrsolutions.com.mx',
            'phone' => '4741552568',
            'employee_number' => '250893',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JUAN',
            'middle_name' => 'ANTONIO',
            'last_name' => 'PEREZ',
            'second_last_name' => 'SANCHEZ',
            'email' => null,
            'phone' => '4741096869',
            'employee_number' => '250894',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JOSE',
            'middle_name' => 'EDUARDO',
            'last_name' => 'CASAS',
            'second_last_name' => 'HERNANDEZ',
            'email' => null,
            'phone' => '442 200 44',
            'employee_number' => '250895',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'DIANA',
            'middle_name' => null,
            'last_name' => 'MENDOZA',
            'second_last_name' => 'PONCE',
            'email' => 'diana.mendoza@ldrsolutions.com.mx',
            'phone' => '5514750033',
            'employee_number' => '250896',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'LUIS',
            'middle_name' => 'ARMANDO',
            'last_name' => 'MANCILLA',
            'second_last_name' => 'RODRIGUEZ',
            'email' => 'supervisorplanta3@ldrsolutions.com.mx',
            'phone' => '3319525487',
            'employee_number' => '250897',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'ABRAHAM',
            'middle_name' => 'DE JESUS',
            'last_name' => 'AGUILAR',
            'second_last_name' => 'TORRES',
            'email' => null,
            'phone' => '3351050836',
            'employee_number' => '250898',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'KAREN',
            'middle_name' => 'DANIELA',
            'last_name' => 'ARCE',
            'second_last_name' => 'LIRA',
            'email' => null,
            'phone' => '4421173830',
            'employee_number' => '250899',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JUAN',
            'middle_name' => 'ANGEL',
            'last_name' => 'VERDE',
            'second_last_name' => 'LEON',
            'email' => null,
            'phone' => '4481302420',
            'employee_number' => '250900',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'EMILIANO',
            'middle_name' => null,
            'last_name' => 'BOCANEGRA',
            'second_last_name' => 'MARIN',
            'email' => null,
            'phone' => '4742081822',
            'employee_number' => '250901',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'TANIA',
            'middle_name' => 'MONSERRAT',
            'last_name' => 'AZNAR',
            'second_last_name' => 'GARCIA',
            'email' => 'tania.aznar@ldrsolutions.com.mx',
            'phone' => '5518596569',
            'employee_number' => '250902',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'CESAR',
            'middle_name' => 'AUGUSTO',
            'last_name' => 'TREJO',
            'second_last_name' => 'VELAZQUEZ',
            'email' => 'cesar.trejo@ldrsolutions.com.mx',
            'phone' => '8180913046',
            'employee_number' => '250903',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'SANDRA',
            'middle_name' => 'PATRICIA',
            'last_name' => 'REYES',
            'second_last_name' => 'DIAZ',
            'email' => 'sandra.reyes@ldrsolutions.com.mx',
            'phone' => '5564425581',
            'employee_number' => '250904',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'KEVIN',
            'middle_name' => 'GETZEMANI',
            'last_name' => 'GUILLEN',
            'second_last_name' => 'LOPEZ',
            'email' => 'kevin.guillen@ldrsolutions.com.mx',
            'phone' => '4435944553',
            'employee_number' => '250905',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'VALERIA',
            'middle_name' => null,
            'last_name' => 'PALACIOS',
            'second_last_name' => 'CASTEÑEDA',
            'email' => 'valeria.palacios@ldrsolutions.com.mx',
            'phone' => '5540136706',
            'employee_number' => '250906',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JORGE',
            'middle_name' => 'LUIS',
            'last_name' => 'PARRA',
            'second_last_name' => 'RIOS',
            'email' => null,
            'phone' => '3123493947',
            'employee_number' => '250907',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'GERARDO',
            'middle_name' => null,
            'last_name' => 'JIMENEZ',
            'second_last_name' => 'VILLALOBOS',
            'email' => null,
            'phone' => '4747360586',
            'employee_number' => '250908',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'MARIA',
            'middle_name' => 'DE JESUS',
            'last_name' => 'UGALDE',
            'second_last_name' => 'LUNA',
            'email' => 'maria.ugalde@ldrsolutions.com.mx',
            'phone' => '448 183 52',
            'employee_number' => '250909',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'BRANDOWN',
            'middle_name' => null,
            'last_name' => 'GOMEZ',
            'second_last_name' => 'MATA',
            'email' => null,
            'phone' => '442 664 65',
            'employee_number' => '250910',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'SAMANTA',
            'middle_name' => 'YOHALI',
            'last_name' => 'SANCHEZ',
            'second_last_name' => 'FABA',
            'email' => 'yohali.sanchez@ldrsolutions.com.mx',
            'phone' => '7224004401',
            'employee_number' => '250911',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'ARTURO',
            'middle_name' => null,
            'last_name' => 'REYES',
            'second_last_name' => 'HERNANDEZ',
            'email' => 'arturo.reyes@ldrsolutions.com.mx',
            'phone' => '5530500490',
            'employee_number' => '250912',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'MARIA',
            'middle_name' => 'FERNANDA',
            'last_name' => 'MORALES',
            'second_last_name' => 'NOVOA',
            'email' => 'maria.morales@ldrsolutions.com.mx',
            'phone' => '3312271098',
            'employee_number' => '250913',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'EDUARDO',
            'middle_name' => 'ADHAIR',
            'last_name' => 'RAMIREZ',
            'second_last_name' => 'LOZANO',
            'email' => 'eduardo.ramirez@ldrsolutions.com.mx',
            'phone' => '5611073235',
            'employee_number' => '250914',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JONATHAN',
            'middle_name' => null,
            'last_name' => 'SANCHEZ',
            'second_last_name' => 'HERNANDEZ',
            'email' => 'jonathan.sanchez@ldrsolutions.com.mx',
            'phone' => '5625014686',
            'employee_number' => '250915',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'CHRISTIAN',
            'middle_name' => 'DAVID',
            'last_name' => 'ARIAS',
            'second_last_name' => 'GALLO',
            'email' => 'david.arias@ldrsolutions.com.mx',
            'phone' => '5530479892',
            'employee_number' => '250916',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'CHRISTIAN',
            'middle_name' => 'JOAQUIN',
            'last_name' => 'RAMON',
            'second_last_name' => 'PARADA',
            'email' => 'christian.ramon@ldrenta.com',
            'phone' => '9232316326',
            'employee_number' => '250917',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'MIGUEL',
            'middle_name' => 'ANGEL',
            'last_name' => 'ORTIZ',
            'second_last_name' => null,
            'email' => null,
            'phone' => '4741005854',
            'employee_number' => '250918',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'CARLOS',
            'middle_name' => 'ENRIQUE',
            'last_name' => 'RAMIREZ',
            'second_last_name' => 'HERNANDEZ',
            'email' => 'enrique.ramirez@ldrsolutions.com.mx',
            'phone' => '55 6860 14',
            'employee_number' => '250919',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'FABIAN',
            'middle_name' => 'ALEJANDRO',
            'last_name' => 'TORRES',
            'second_last_name' => 'PICON',
            'email' => 'fabian.torres@ldrsolutions.com.mx',
            'phone' => '4741275710',
            'employee_number' => '250920',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'ERNESTO',
            'middle_name' => null,
            'last_name' => 'VELAZQUEZ',
            'second_last_name' => 'REYES',
            'email' => 'ernesto.velazquez@ldrsolutions.com.mx',
            'phone' => '5543407378',
            'employee_number' => '250921',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'VICTOR',
            'middle_name' => 'HUGO',
            'last_name' => 'RAMIREZ',
            'second_last_name' => 'GARCIA',
            'email' => null,
            'phone' => '442 459 19',
            'employee_number' => '250922',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'FRANCISCO',
            'middle_name' => 'JAVIER',
            'last_name' => 'RUBIO',
            'second_last_name' => 'ACOSTA',
            'email' => null,
            'phone' => '3322255175',
            'employee_number' => '250923',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JOSE',
            'middle_name' => 'FERNANDO',
            'last_name' => 'CONTRERAS',
            'second_last_name' => 'ANTIMO',
            'email' => null,
            'phone' => '4741989821',
            'employee_number' => '250924',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'HERIBERTO',
            'middle_name' => null,
            'last_name' => 'ROJAS',
            'second_last_name' => 'GONZALEZ',
            'email' => null,
            'phone' => '4741494748',
            'employee_number' => '250925',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'URIEL',
            'middle_name' => null,
            'last_name' => 'CARMONA',
            'second_last_name' => 'GONZALEZ',
            'email' => 'uriel.carmona@ldrsolutions.com.mx',
            'phone' => '5648577356',
            'employee_number' => '250926',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'KARINA',
            'middle_name' => 'JACQUELINE',
            'last_name' => 'CABRERA',
            'second_last_name' => 'SANCHEZ',
            'email' => 'jacqueline.cabrera@ldrsolutions.com.mx',
            'phone' => '5561737546',
            'employee_number' => '250927',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'MARIA',
            'middle_name' => 'DE SAN JUAN',
            'last_name' => 'ESCAMILLA',
            'second_last_name' => 'VALADEZ',
            'email' => null,
            'phone' => '4747475776',
            'employee_number' => '250928',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'LUIS',
            'middle_name' => 'CARLOS',
            'last_name' => 'PAREDES',
            'second_last_name' => 'MARENTES',
            'email' => null,
            'phone' => '4741036158',
            'employee_number' => '250929',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'BRAYAN',
            'middle_name' => 'EMMANUEL',
            'last_name' => 'RUIZ',
            'second_last_name' => 'CRUZ',
            'email' => null,
            'phone' => '3310425611',
            'employee_number' => '250930',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'ANGEL',
            'middle_name' => 'DAVID',
            'last_name' => 'OLMOS',
            'second_last_name' => 'TRINIDAD',
            'email' => null,
            'phone' => '3330605041',
            'employee_number' => '250931',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JUAN',
            'middle_name' => 'EMILIO',
            'last_name' => 'RONQUILLO',
            'second_last_name' => 'ALONSO',
            'email' => 'emilio.ronquillo@ldrsolutions.com.mx',
            'phone' => '5636676795',
            'employee_number' => '250932',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'KATIA',
            'middle_name' => 'ABIGAIL',
            'last_name' => 'TORAL',
            'second_last_name' => 'JARDON',
            'email' => 'katia.toral@ldrsolutions.com.mx',
            'phone' => '4427757166',
            'employee_number' => '250933',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JESUS',
            'middle_name' => 'ALEJANDRO',
            'last_name' => 'GONZALEZ',
            'second_last_name' => 'PACHECO',
            'email' => null,
            'phone' => '332751715',
            'employee_number' => '250934',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'VALERIA',
            'middle_name' => null,
            'last_name' => 'GARCES',
            'second_last_name' => 'ZAMORA',
            'email' => 'valeria.garces@ldrsolutions.com.mx',
            'phone' => '9614537000',
            'employee_number' => '250935',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'DIEGO',
            'middle_name' => 'ALBERTO',
            'last_name' => 'HERNANDEZ',
            'second_last_name' => 'GUTIERREZ',
            'email' => null,
            'phone' => '3334506285',
            'employee_number' => '250936',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'GABRIELA',
            'middle_name' => 'ABIGAIL',
            'last_name' => 'HUITRON',
            'second_last_name' => 'GUERRERO',
            'email' => 'abigail.huitron@ldrsolutions.com.mx',
            'phone' => '5531278064',
            'employee_number' => '250937',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'MARIA',
            'middle_name' => 'ESTHER',
            'last_name' => 'REYNOSO',
            'second_last_name' => 'RODRIGUEZ',
            'email' => 'esther.reynoso@ldrenta.com',
            'phone' => '3325728092',
            'employee_number' => '250938',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'OSCAR',
            'middle_name' => null,
            'last_name' => 'BAUTISTA',
            'second_last_name' => 'VILLAMORA',
            'email' => 'oscar.bautista@ldrsolutions.com.mx',
            'phone' => '5561330723',
            'employee_number' => '250939',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JESSICA',
            'middle_name' => 'FERNANDA',
            'last_name' => 'HERNANDEZ',
            'second_last_name' => 'PEREZ',
            'email' => null,
            'phone' => '4741423230',
            'employee_number' => '250940',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'DAVID',
            'middle_name' => null,
            'last_name' => 'YESCAS',
            'second_last_name' => 'OSORIO',
            'email' => 'david.yescas@ldrsolutions.com.mx',
            'phone' => '5587696920',
            'employee_number' => '250941',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'CARLOS',
            'middle_name' => 'AUGUSTO',
            'last_name' => 'JUAREZ',
            'second_last_name' => 'MONTANO',
            'email' => 'carlos.juarez@ldrsolutions.com.mx',
            'phone' => '2292537437',
            'employee_number' => '250942',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JACOBO',
            'middle_name' => null,
            'last_name' => 'ZARAGOZA',
            'second_last_name' => 'MARTINEZ',
            'email' => 'jacobo.zaragoza@ldrsolutions.com.mx',
            'phone' => '5534229938',
            'employee_number' => '250943',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'LUIS',
            'middle_name' => 'MERCED',
            'last_name' => 'PEDROZA',
            'second_last_name' => 'MATA',
            'email' => 'luis.pedroza@ldrsolutions.com.mx',
            'phone' => '4741343104',
            'employee_number' => '250944',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'JULIO',
            'middle_name' => 'CESAR',
            'last_name' => 'TORAL',
            'second_last_name' => 'MENDEZ',
            'email' => null,
            'phone' => '4423533514',
            'employee_number' => '250945',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'AARON',
            'middle_name' => null,
            'last_name' => 'TORRES',
            'second_last_name' => 'PONCE',
            'email' => null,
            'phone' => '4741039931',
            'employee_number' => '250946',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'RUTH',
            'middle_name' => 'DAMAR',
            'last_name' => 'TREVIÑO',
            'second_last_name' => 'CORTES',
            'email' => 'damar.trevino@ldrsolutions.com.mx',
            'phone' => '5545013179',
            'employee_number' => '250947',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'DULCE',
            'middle_name' => 'ESTEFANIA',
            'last_name' => 'RAZO',
            'second_last_name' => 'SANCHEZ',
            'email' => 'practicante.rh@ldrsolutions.com.mx',
            'phone' => '4741444813',
            'employee_number' => '250948',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'LUIS',
            'middle_name' => 'OCTAVIO',
            'last_name' => 'ESPINOZA',
            'second_last_name' => 'DIAZ INFANTE',
            'email' => null,
            'phone' => '4741427156',
            'employee_number' => '250949',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'nan',
            'middle_name' => 'RAUL',
            'last_name' => 'TELLEZ',
            'second_last_name' => 'LOPEZ',
            'email' => 'raul.tellez@ldrsolutions.com.mx',
            'phone' => null,
            'employee_number' => '1',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);

        User::create([
            'first_name' => 'DANIEL',
            'middle_name' => 'OMAR',
            'last_name' => 'LOPEZ',
            'second_last_name' => 'DEL VILLAR',
            'email' => 'daniel.lopez@ldrsolutions.com.mx',
            'phone' => null,
            'employee_number' => '2',
            'password' => Hash::make('password'),
            'user_type' => 2,
        ]);
    }
}
