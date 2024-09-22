<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CidadeBrasilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cidades = [
            // Acre
            ['nome' => 'Rio Branco', 'estado_id' => 1],
            ['nome' => 'Cruzeiro do Sul', 'estado_id' => 1],
            ['nome' => 'Sena Madureira', 'estado_id' => 1],

            // Alagoas
            ['nome' => 'Maceió', 'estado_id' => 2],
            ['nome' => 'Arapiraca', 'estado_id' => 2],
            ['nome' => 'Palmeira dos Índios', 'estado_id' => 2],

            // Amapá
            ['nome' => 'Macapá', 'estado_id' => 3],
            ['nome' => 'Santana', 'estado_id' => 3],
            ['nome' => 'Laranjal do Jari', 'estado_id' => 3],

            // Amazonas
            ['nome' => 'Manaus', 'estado_id' => 4],
            ['nome' => 'Parintins', 'estado_id' => 4],
            ['nome' => 'Itacoatiara', 'estado_id' => 4],

            // Bahia
            ['nome' => 'Salvador', 'estado_id' => 5],
            ['nome' => 'Feira de Santana', 'estado_id' => 5],
            ['nome' => 'Vitória da Conquista', 'estado_id' => 5],

            // Ceará
            ['nome' => 'Fortaleza', 'estado_id' => 6],
            ['nome' => 'Caucaia', 'estado_id' => 6],
            ['nome' => 'Juazeiro do Norte', 'estado_id' => 6],

            // Distrito Federal
            ['nome' => 'Brasília', 'estado_id' => 7],
            ['nome' => 'Taguatinga', 'estado_id' => 7],
            ['nome' => 'Ceilândia', 'estado_id' => 7],

            // Espírito Santo
            ['nome' => 'Vitória', 'estado_id' => 8],
            ['nome' => 'Vila Velha', 'estado_id' => 8],
            ['nome' => 'Serra', 'estado_id' => 8],

            // Goiás
            ['nome' => 'Goiânia', 'estado_id' => 9],
            ['nome' => 'Aparecida de Goiânia', 'estado_id' => 9],
            ['nome' => 'Anápolis', 'estado_id' => 9],

            // Maranhão
            ['nome' => 'São Luís', 'estado_id' => 10],
            ['nome' => 'Imperatriz', 'estado_id' => 10],
            ['nome' => 'Caxias', 'estado_id' => 10],

            // Mato Grosso
            ['nome' => 'Cuiabá', 'estado_id' => 11],
            ['nome' => 'Várzea Grande', 'estado_id' => 11],
            ['nome' => 'Rondonópolis', 'estado_id' => 11],

            // Mato Grosso do Sul
            ['nome' => 'Campo Grande', 'estado_id' => 12],
            ['nome' => 'Dourados', 'estado_id' => 12],
            ['nome' => 'Três Lagoas', 'estado_id' => 12],

            // Minas Gerais
            ['nome' => 'Belo Horizonte', 'estado_id' => 13],
            ['nome' => 'Uberlândia', 'estado_id' => 13],
            ['nome' => 'Contagem', 'estado_id' => 13],

            // Pará
            ['nome' => 'Belém', 'estado_id' => 14],
            ['nome' => 'Ananindeua', 'estado_id' => 14],
            ['nome' => 'Santarém', 'estado_id' => 14],

            // Paraíba
            ['nome' => 'João Pessoa', 'estado_id' => 15],
            ['nome' => 'Campina Grande', 'estado_id' => 15],
            ['nome' => 'Santa Rita', 'estado_id' => 15],

            // Paraná
            ['nome' => 'Curitiba', 'estado_id' => 16],
            ['nome' => 'Londrina', 'estado_id' => 16],
            ['nome' => 'Maringá', 'estado_id' => 16],

            // Pernambuco
            ['nome' => 'Recife', 'estado_id' => 17],
            ['nome' => 'Jaboatão dos Guararapes', 'estado_id' => 17],
            ['nome' => 'Olinda', 'estado_id' => 17],

            // Piauí
            ['nome' => 'Teresina', 'estado_id' => 18],
            ['nome' => 'Parnaíba', 'estado_id' => 18],
            ['nome' => 'Picos', 'estado_id' => 18],

            // Rio de Janeiro
            ['nome' => 'Rio de Janeiro', 'estado_id' => 19],
            ['nome' => 'Niterói', 'estado_id' => 19],
            ['nome' => 'Duque de Caxias', 'estado_id' => 19],

            // Rio Grande do Norte
            ['nome' => 'Natal', 'estado_id' => 20],
            ['nome' => 'Mossoró', 'estado_id' => 20],
            ['nome' => 'Parnamirim', 'estado_id' => 20],

            // Rio Grande do Sul
            ['nome' => 'Porto Alegre', 'estado_id' => 21],
            ['nome' => 'Caxias do Sul', 'estado_id' => 21],
            ['nome' => 'Pelotas', 'estado_id' => 21],

            // Rondônia
            ['nome' => 'Porto Velho', 'estado_id' => 22],
            ['nome' => 'Ji-Paraná', 'estado_id' => 22],
            ['nome' => 'Ariquemes', 'estado_id' => 22],

            // Roraima
            ['nome' => 'Boa Vista', 'estado_id' => 23],
            ['nome' => 'Rorainópolis', 'estado_id' => 23],
            ['nome' => 'Caracaraí', 'estado_id' => 23],

            // Santa Catarina
            ['nome' => 'Florianópolis', 'estado_id' => 24],
            ['nome' => 'Joinville', 'estado_id' => 24],
            ['nome' => 'Blumenau', 'estado_id' => 24],

            // São Paulo
            ['nome' => 'São Paulo', 'estado_id' => 25],
            ['nome' => 'Guarulhos', 'estado_id' => 25],
            ['nome' => 'Campinas', 'estado_id' => 25],

            // Sergipe
            ['nome' => 'Aracaju', 'estado_id' => 26],
            ['nome' => 'Nossa Senhora do Socorro', 'estado_id' => 26],
            ['nome' => 'Itabaiana', 'estado_id' => 26],

            // Tocantins
            ['nome' => 'Palmas', 'estado_id' => 27],
            ['nome' => 'Araguaína', 'estado_id' => 27],
            ['nome' => 'Gurupi', 'estado_id' => 27],
        ];

        DB::table('cidades')->insert($cidades);
    }
}
