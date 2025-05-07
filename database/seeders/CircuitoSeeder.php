<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Circuito;

class CircuitoSeeder extends Seeder
{
    public function run(): void
    {
        Circuito::insert([
            ['id'=>'1', 'nombre'=>'CIRCUITO 1'],
            ['id'=>'2', 'nombre'=>'CIRCUITO 2'],
            ['id'=>'3', 'nombre'=>'CIRCUITO 3'],
            ['id'=>'4', 'nombre'=>'CIRCUITO 4'],
            ['id'=>'5', 'nombre'=>'CIRCUITO 5'],
        ]);
    }
}
