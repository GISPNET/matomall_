<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'name' => 'Ofertas'
            ],
            [
                'name' => 'Supermercado'
            ],
            [
                'name' => 'Moda'
            ],
            [
                'name' => 'Celulares'
            ],
            [
                'name' => 'Eletrônicos'
            ],
            [
                'name' => 'Casa'
            ],
            [
                'name' => 'Jantar'
            ],
            [
                'name' => 'Presentes'
            ],
            [
                'name' => 'Ferramentas'
            ],
            [
                'name' => 'Viagem'
            ],
            [
                'name' => 'Beleza e Cuidados Pessoais'
            ],
            [
                'name' => 'Livros e Mídias'
            ],
            [
                'name' => 'Saúde e Bem-estar'
            ],
            [
                'name' => 'Esportes e Fitness'
            ],
            [
                'name' => 'Brinquedos e Jogos'
            ],
            [
                'name' => 'Automotivo'
            ],
            [
                'name' => 'Casa e Decoração'
            ],
            [
                'name' => 'Alimentos e Bebidas'
            ],
            [
                'name' => 'Animais de Estimação'
            ],
            [
                'name' => 'Instrumentos Musicais'
            ],
            [
                'name' => 'Arte e Artesanato'
            ],
            [
                'name' => 'Joias e Acessórios'
            ],
            [
                'name' => 'Eletrônicos de Consumo'
            ],
            [
                'name' => 'Móveis e Acessórios'
            ],
            [
                'name' => 'Instrumentos e Equipamentos Industriais'
            ],
            [
                'name' => 'Material de Escritório'
            ],
            [
                'name' => 'Roupas e Acessórios para Bebês e Crianças'
            ],
            [
                'name' => 'Produtos Sustentáveis e Ecológicos'
            ],
            [
                'name' => 'Ferramentas e Equipamentos para Casa e Jardim'
            ],
            [
                'name' => 'Eletrônicos para Automóveis'
            ],
            [
                'name' => 'Outros'
            ]
        ]);
    }
}
