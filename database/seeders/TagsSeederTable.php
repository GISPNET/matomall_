<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagsSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert(
            [
                [
                    'name' => 'Promoção'
                ],
                [
                    'name' => 'Novidades'
                ],
                [
                    'name' => 'Mais vendidos'
                ],
                [
                    'name' => 'Em alta'
                ],
                [
                    'name' => 'Desconto'
                ],
                [
                    'name' => 'Frete grátis'
                ],
                [
                    'name' => 'Lançamento'
                ],
                [
                    'name' => 'Oferta relâmpago'
                ],
                [
                    'name' => 'Popular'
                ],
                [
                    'name' => 'Esgotado'
                ],
                [
                    'name' => 'Recomendado'
                ],
                [
                    'name' => 'Melhor preço'
                ],
                [
                    'name' => 'Edição limitada'
                ],
                [
                    'name' => 'Outlet'
                ],
                [
                    'name' => 'Vintage'
                ],
                [
                    'name' => 'Artesanal'
                ],
                [
                    'name' => 'Feito à mão'
                ],
                [
                    'name' => 'Personalizado'
                ],
                [
                    'name' => 'Grátis'
                ],
                [
                    'name' => 'Tamanho único'
                ],
                [
                    'name' => 'Eco-friendly'
                ],
                [
                    'name' => 'Vegano'
                ],
                [
                    'name' => 'Orgânico'
                ],
                [
                    'name' => 'Saudável'
                ],
                [
                    'name' => 'Sem glúten'
                ],
                [
                    'name' => 'Sem lactose'
                ],
                [
                    'name' => 'Zero açúcar'
                ],
                [
                    'name' => 'Sem conservantes'
                ],
                [
                    'name' => 'Acessível'
                ],
                [
                    'name' => 'Luxo'
                ],
            ]
        );
    }
}
