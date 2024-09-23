<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StartAplication extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call([
            EstadoBrasilSeeder::class,
            CidadeBrasilSeeder::class,
            RepresentanteSeeder::class,
        ]);
    }
}
