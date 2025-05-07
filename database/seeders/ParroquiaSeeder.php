<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Parroquia;

class ParroquiaSeeder extends Seeder
{
    public function run(): void
    {
        Parroquia::insert([
            ['id' => '10111', 'nombre' => '23 DE ENERO', 'parroquia_id' => '10111', 'abreviatura' => '23E', 'circuito_id'=>'2'],
            ['id' => '10101', 'nombre' => 'ALTAGRACIA', 'parroquia_id' => '10101', 'abreviatura' => 'ALT', 'circuito_id'=>'2'],
            ['id' => '10112', 'nombre' => 'ANTIMANO', 'parroquia_id' => '10112', 'abreviatura' => 'ANT', 'circuito_id'=>'5'],
            ['id' => '10102', 'nombre' => 'CANDELARIA', 'parroquia_id' => '10102', 'abreviatura' => 'CAN', 'circuito_id'=>'3'],
            ['id' => '10117', 'nombre' => 'CARICUAO', 'parroquia_id' => '10117', 'abreviatura' => 'CAR', 'circuito_id'=>'5'],
            ['id' => '10103', 'nombre' => 'CATEDRAL', 'parroquia_id' => '10103', 'abreviatura' => 'CAT', 'circuito_id'=>'2'],
            ['id' => '10119', 'nombre' => 'COCHE', 'parroquia_id' => '10119', 'abreviatura' => 'COC', 'circuito_id'=>'4'],
            ['id' => '10118', 'nombre' => 'EL JUNQUITO', 'parroquia_id' => '10118', 'abreviatura' => 'JUN', 'circuito_id'=>'1'],
            ['id' => '10122', 'nombre' => 'EL PARAISO', 'parroquia_id' => '10122', 'abreviatura' => 'PAR', 'circuito_id'=>'5'],
            ['id' => '10113', 'nombre' => 'EL RECREO', 'parroquia_id' => '10113', 'abreviatura' => 'REC', 'circuito_id'=>'3'],
            ['id' => '10114', 'nombre' => 'EL VALLE', 'parroquia_id' => '10114', 'abreviatura' => 'VAL', 'circuito_id'=>'4'],
            ['id' => '10104', 'nombre' => 'LA PASTORA', 'parroquia_id' => '10104', 'abreviatura' => 'PAS', 'circuito_id'=>'1'],
            ['id' => '10115', 'nombre' => 'LA VEGA', 'parroquia_id' => '10115', 'abreviatura' => 'VEG', 'circuito_id'=>'5'],
            ['id' => '10116', 'nombre' => 'MACARAO', 'parroquia_id' => '10116', 'abreviatura' => 'MAC', 'circuito_id'=>'5'],
            ['id' => '10105', 'nombre' => 'SAN AGUSTIN', 'parroquia_id' => '10105', 'abreviatura' => 'AGU', 'circuito_id'=>'3'],
            ['id' => '10121', 'nombre' => 'SAN BERNARDINO', 'parroquia_id' => '10121', 'abreviatura' => 'BER', 'circuito_id'=>'3'],
            ['id' => '10106', 'nombre' => 'SAN JOSE', 'parroquia_id' => '10106', 'abreviatura' => 'SJO', 'circuito_id'=>'3'],
            ['id' => '10107', 'nombre' => 'SAN JUAN', 'parroquia_id' => '10107', 'abreviatura' => 'SJU', 'circuito_id'=>'2'],
            ['id' => '10120', 'nombre' => 'SAN PEDRO', 'parroquia_id' => '10120', 'abreviatura' => 'SPE', 'circuito_id'=>'3'],
            ['id' => '10108', 'nombre' => 'SANTA ROSALIA', 'parroquia_id' => '10108', 'abreviatura' => 'SRO', 'circuito_id'=>'4'],
            ['id' => '10109', 'nombre' => 'SANTA TERESA', 'parroquia_id' => '10109', 'abreviatura' => 'STE', 'circuito_id'=>'2'],
            ['id' => '10110', 'nombre' => 'SUCRE', 'parroquia_id' => '10110', 'abreviatura' => 'SUC', 'circuito_id'=>'1']
        ]);
    }
}
