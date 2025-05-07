<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'admin@email.com',
            'password' => Hash::make('21246813')
        ]);

        $this->call(CircuitoSeeder::class);
        $this->call(ParroquiaSeeder::class);
        $this->call(ComunasSeeder::class);
        $this->call(EjeSeeder::class);
        $this->call(CentroSeeder::class);
    }
}
