<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RepresentanteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $representantes = [
            ['nome' => 'Marcos Silva', 'cidade_id' => 1],
            ['nome' => 'Maria Oliveira', 'cidade_id' => 2],
            ['nome' => 'Pedro Santos', 'cidade_id' => 3],
            ['nome' => 'Ana Costa', 'cidade_id' => 4],
            ['nome' => 'Carlos Pereira', 'cidade_id' => 5],
        ];

        DB::table('representante')->insert($representantes);
    }
}
