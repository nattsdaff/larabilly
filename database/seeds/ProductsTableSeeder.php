<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'Catre Napper',
                'slug' => 'catre-napper',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum suscipit doloremque reiciendis ab, minus odio culpa excepturi incidunt assumenda beatae, rem dolorum nobis odit asperiores recusandae. Nihil fugit unde vel.',
                'price' => '13000',
                'picture' => 'assets/img/deseados/deseados-3.jpg',
                'category_id' => '4'
            ],
            [
                'name' => 'Sillón Byron',
                'slug' => 'sillon-byron',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum suscipit doloremque reiciendis ab, minus odio culpa excepturi incidunt assumenda beatae, rem dolorum nobis odit asperiores recusandae. Nihil fugit unde vel.',
                'price' => '8500',
                'picture' => 'assets/img/deseados/deseados-4.jpg',
                'category_id' => '6'
            ],
            [
                'name' => 'Banquito Eco',
                'slug' => 'banquito-eco',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum suscipit doloremque reiciendis ab, minus odio culpa excepturi incidunt assumenda beatae, rem dolorum nobis odit asperiores recusandae. Nihil fugit unde vel.',
                'price' => '5350',
                'picture' => 'assets/img/deseados/deseados-5.jpg',
                'category_id' => '5'
            ],
            [
                'name' => 'New York Violet Dining Arm Chair',
                'slug' => 'new-york-violet-dining-arm-chair',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum suscipit doloremque reiciendis ab, minus odio culpa excepturi incidunt assumenda beatae, rem dolorum nobis odit asperiores recusandae. Nihil fugit unde vel.',
                'price' => '10200',
                'picture' => 'assets/img/deseados/deseados-2.jpg',
                'category_id' => '3'
            ],
            [
                'name' => 'St. Charles Desk',
                'slug' => 'st-charles-desk',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum suscipit doloremque reiciendis ab, minus odio culpa excepturi incidunt assumenda beatae, rem dolorum nobis odit asperiores recusandae. Nihil fugit unde vel.',
                'price' => '11750',
                'picture' => 'assets/img/deseados/deseados-1.jpg',
                'category_id' => '2'
            ],
            [
                'name' => 'Sillón Amore Mio',
                'slug' => 'sillon-amore-mio',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum suscipit doloremque reiciendis ab, minus odio culpa excepturi incidunt assumenda beatae, rem dolorum nobis odit asperiores recusandae. Nihil fugit unde vel.',
                'price' => '16380',
                'picture' => 'assets/img/deseados/deseados-6.jpg',
                'category_id' => '6'
            ],
        ]);
    }
}
