<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriasSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert(
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
                'name' => 'Outros'
            ],
        );
    }
}
