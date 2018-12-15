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
                'category_id' => '4',
                'featured' => true
            ],
            [
                'name' => 'Sillón Byron',
                'slug' => 'sillon-byron',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum suscipit doloremque reiciendis ab, minus odio culpa excepturi incidunt assumenda beatae, rem dolorum nobis odit asperiores recusandae. Nihil fugit unde vel.',
                'price' => '8500',
                'picture' => 'assets/img/deseados/deseados-4.jpg',
                'category_id' => '6',
                'featured' => true
            ],
            [
                'name' => 'Banquito Eco',
                'slug' => 'banquito-eco',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum suscipit doloremque reiciendis ab, minus odio culpa excepturi incidunt assumenda beatae, rem dolorum nobis odit asperiores recusandae. Nihil fugit unde vel.',
                'price' => '5350',
                'picture' => 'assets/img/deseados/deseados-5.jpg',
                'category_id' => '5',
                'featured' => true
            ],
            [
                'name' => 'New York Violet Dining Arm Chair',
                'slug' => 'new-york-violet-dining-arm-chair',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum suscipit doloremque reiciendis ab, minus odio culpa excepturi incidunt assumenda beatae, rem dolorum nobis odit asperiores recusandae. Nihil fugit unde vel.',
                'price' => '10200',
                'picture' => 'assets/img/deseados/deseados-2.jpg',
                'category_id' => '3',
                'featured' => true
            ],
            [
                'name' => 'St. Charles Desk',
                'slug' => 'st-charles-desk',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum suscipit doloremque reiciendis ab, minus odio culpa excepturi incidunt assumenda beatae, rem dolorum nobis odit asperiores recusandae. Nihil fugit unde vel.',
                'price' => '11750',
                'picture' => 'assets/img/deseados/deseados-1.jpg',
                'category_id' => '2',
                'featured' => true
            ],
            [
                'name' => 'Sillón Amore Mio',
                'slug' => 'sillon-amore-mio',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum suscipit doloremque reiciendis ab, minus odio culpa excepturi incidunt assumenda beatae, rem dolorum nobis odit asperiores recusandae. Nihil fugit unde vel.',
                'price' => '16380',
                'picture' => 'assets/img/deseados/deseados-6.jpg',
                'category_id' => '6',
                'featured' => true
            ],
            [
                'name' => 'Producto Relleno',
                'slug' => 'producto-relleno',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum suscipit doloremque reiciendis ab, minus odio culpa excepturi incidunt assumenda beatae, rem dolorum nobis odit asperiores recusandae. Nihil fugit unde vel.',
                'price' => '1928',
                'picture' => 'assets/img/product.jpg',
                'category_id' => '2',
                'featured' => true
            ],
            [
                'name' => 'Producto Relleno 2',
                'slug' => 'producto-relleno-2',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum suscipit doloremque reiciendis ab, minus odio culpa excepturi incidunt assumenda beatae, rem dolorum nobis odit asperiores recusandae. Nihil fugit unde vel.',
                'price' => '1928',
                'picture' => 'assets/img/product.jpg',
                'category_id' => '2',
                'featured' => true
            ],
            [
                'name' => 'Producto Relleno 3',
                'slug' => 'producto-relleno-3',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum suscipit doloremque reiciendis ab, minus odio culpa excepturi incidunt assumenda beatae, rem dolorum nobis odit asperiores recusandae. Nihil fugit unde vel.',
                'price' => '1928',
                'picture' => 'assets/img/product.jpg',
                'category_id' => '2',
                'featured' => true
            ],
            [
                'name' => 'Producto Relleno 4',
                'slug' => 'producto-relleno-4',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum suscipit doloremque reiciendis ab, minus odio culpa excepturi incidunt assumenda beatae, rem dolorum nobis odit asperiores recusandae. Nihil fugit unde vel.',
                'price' => '1928',
                'picture' => 'assets/img/product.jpg',
                'category_id' => '2',
                'featured' => true
            ],
            [
                'name' => 'Producto Relleno 5',
                'slug' => 'producto-relleno-5',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum suscipit doloremque reiciendis ab, minus odio culpa excepturi incidunt assumenda beatae, rem dolorum nobis odit asperiores recusandae. Nihil fugit unde vel.',
                'price' => '1928',
                'picture' => 'assets/img/product.jpg',
                'category_id' => '2',
                'featured' => true
            ],
            [
                'name' => 'Producto Relleno 6',
                'slug' => 'producto-relleno-6',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum suscipit doloremque reiciendis ab, minus odio culpa excepturi incidunt assumenda beatae, rem dolorum nobis odit asperiores recusandae. Nihil fugit unde vel.',
                'price' => '1928',
                'picture' => 'assets/img/product.jpg',
                'category_id' => '2',
                'featured' => true
            ],
            [
                'name' => 'Producto Relleno 7',
                'slug' => 'producto-relleno-7',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum suscipit doloremque reiciendis ab, minus odio culpa excepturi incidunt assumenda beatae, rem dolorum nobis odit asperiores recusandae. Nihil fugit unde vel.',
                'price' => '1928',
                'picture' => 'assets/img/product.jpg',
                'category_id' => '2',
                'featured' => true
            ],
            [
                'name' => 'Producto Relleno 8',
                'slug' => 'producto-relleno-8',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum suscipit doloremque reiciendis ab, minus odio culpa excepturi incidunt assumenda beatae, rem dolorum nobis odit asperiores recusandae. Nihil fugit unde vel.',
                'price' => '1928',
                'picture' => 'assets/img/product.jpg',
                'category_id' => '2',
                'featured' => true
            ],
            [
                'name' => 'Producto Relleno 9',
                'slug' => 'producto-relleno-9',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum suscipit doloremque reiciendis ab, minus odio culpa excepturi incidunt assumenda beatae, rem dolorum nobis odit asperiores recusandae. Nihil fugit unde vel.',
                'price' => '1928',
                'picture' => 'assets/img/product.jpg',
                'category_id' => '2',
                'featured' => true
            ],
            [
                'name' => 'Producto Relleno 10',
                'slug' => 'producto-relleno-10',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum suscipit doloremque reiciendis ab, minus odio culpa excepturi incidunt assumenda beatae, rem dolorum nobis odit asperiores recusandae. Nihil fugit unde vel.',
                'price' => '1928',
                'picture' => 'assets/img/product.jpg',
                'category_id' => '2',
                'featured' => false
            ],
            [
                'name' => 'Producto Relleno 11',
                'slug' => 'producto-relleno-11',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum suscipit doloremque reiciendis ab, minus odio culpa excepturi incidunt assumenda beatae, rem dolorum nobis odit asperiores recusandae. Nihil fugit unde vel.',
                'price' => '1928',
                'picture' => 'assets/img/product.jpg',
                'category_id' => '2',
                'featured' => false
            ],
            [
                'name' => 'Producto Relleno 12',
                'slug' => 'producto-relleno-12',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum suscipit doloremque reiciendis ab, minus odio culpa excepturi incidunt assumenda beatae, rem dolorum nobis odit asperiores recusandae. Nihil fugit unde vel.',
                'price' => '1928',
                'picture' => 'assets/img/product.jpg',
                'category_id' => '2',
                'featured' => false
            ],
            [
                'name' => 'Producto Relleno 13',
                'slug' => 'producto-relleno-13',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum suscipit doloremque reiciendis ab, minus odio culpa excepturi incidunt assumenda beatae, rem dolorum nobis odit asperiores recusandae. Nihil fugit unde vel.',
                'price' => '1928',
                'picture' => 'assets/img/product.jpg',
                'category_id' => '2',
                'featured' => false
            ],
            [
                'name' => 'Producto Relleno 14',
                'slug' => 'producto-relleno-14',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum suscipit doloremque reiciendis ab, minus odio culpa excepturi incidunt assumenda beatae, rem dolorum nobis odit asperiores recusandae. Nihil fugit unde vel.',
                'price' => '1928',
                'picture' => 'assets/img/product.jpg',
                'category_id' => '2',
                'featured' => false
            ]
        ]);
    }
}
