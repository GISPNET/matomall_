<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandsSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brands')->insert([
            [
                'name' => 'Nike'
            ],
            [
                'name' => 'Adidas'
            ],
            [
                'name' => 'Apple'
            ],
            [
                'name' => 'Samsung'
            ],
            [
                'name' => 'Sony'
            ],
            [
                'name' => 'Microsoft'
            ],
            [
                'name' => 'HP'
            ],
            [
                'name' => 'Dell'
            ],
            [
                'name' => 'Lenovo'
            ],
            [
                'name' => 'Canon'
            ],
            [
                'name' => 'Nikon'
            ],
            [
                'name' => 'LG'
            ],
            [
                'name' => 'Bose'
            ],
            [
                'name' => 'Sony'
            ],
            [
                'name' => 'GoPro'
            ],
            [
                'name' => 'Coca-Cola'
            ],
            [
                'name' => 'Pepsi'
            ],
            [
                'name' => 'Nestlé'
            ],
            [
                'name' => 'Kellogg\'s'
            ],
            [
                'name' => 'Unilever'
            ],
            [
                'name' => 'Procter & Gamble'
            ],
            [
                'name' => 'L\'Oréal'
            ],
            [
                'name' => 'Gucci'
            ],
            [
                'name' => 'Prada'
            ],
            [
                'name' => 'Louis Vuitton'
            ],
            [
                'name' => 'Rolex'
            ],
            [
                'name' => 'Hermès'
            ],
            [
                'name' => 'Chanel'
            ],
            [
                'name' => 'Dior'
            ],
            [
                'name' => 'Zara'
            ],
            [
                'name' => 'H&M'
            ],
        ]);
    }
}
