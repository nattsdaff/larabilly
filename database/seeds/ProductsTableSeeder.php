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
                'name' => 'Sillón Begonia Brown',
                'slug' => 'sillon-begonia-brown',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum suscipit doloremque reiciendis ab, minus odio culpa excepturi incidunt assumenda beatae, rem dolorum nobis odit asperiores recusandae. Nihil fugit unde vel.',
                'price' => '18990',
                'picture' => 'assets/img/deseados/sillones-2.jpg',
                'category_id' => '6',
                'featured' => true
            ],
            [
                'name' => 'Sillón Begonia Gray',
                'slug' => 'sillon-begonia-gray',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum suscipit doloremque reiciendis ab, minus odio culpa excepturi incidunt assumenda beatae, rem dolorum nobis odit asperiores recusandae. Nihil fugit unde vel.',
                'price' => '18990',
                'picture' => 'assets/img/deseados/sillones-3.jpg',
                'category_id' => '6',
                'featured' => true
            ],
            [
                'name' => 'Sillón Fiona',
                'slug' => 'sillon-fiona',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum suscipit doloremque reiciendis ab, minus odio culpa excepturi incidunt assumenda beatae, rem dolorum nobis odit asperiores recusandae. Nihil fugit unde vel.',
                'price' => '23990',
                'picture' => 'assets/img/deseados/sillones-4.jpg',
                'category_id' => '6',
                'featured' => true
            ],
            [
                'name' => 'Sillón Marina Orange',
                'slug' => 'sillon-marina-orange',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum suscipit doloremque reiciendis ab, minus odio culpa excepturi incidunt assumenda beatae, rem dolorum nobis odit asperiores recusandae. Nihil fugit unde vel.',
                'price' => '32490',
                'picture' => 'assets/img/deseados/sillones-5.jpg',
                'category_id' => '6',
                'featured' => true
            ],
            [
                'name' => 'Sillón Rihanna Gray',
                'slug' => 'sillon-rihanna-gray',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum suscipit doloremque reiciendis ab, minus odio culpa excepturi incidunt assumenda beatae, rem dolorum nobis odit asperiores recusandae. Nihil fugit unde vel.',
                'price' => '21990',
                'picture' => 'assets/img/deseados/sillones-6.jpg',
                'category_id' => '6',
                'featured' => true
            ],
            [
                'name' => 'Sillón Rihanna Blue',
                'slug' => 'sillon-rihanna-blue',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum suscipit doloremque reiciendis ab, minus odio culpa excepturi incidunt assumenda beatae, rem dolorum nobis odit asperiores recusandae. Nihil fugit unde vel.',
                'price' => '21990',
                'picture' => 'assets/img/deseados/sillones-7.jpg',
                'category_id' => '6',
                'featured' => true
            ],
            [
                'name' => 'Sillón Rihanna White',
                'slug' => 'sillon-rihanna-white',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum suscipit doloremque reiciendis ab, minus odio culpa excepturi incidunt assumenda beatae, rem dolorum nobis odit asperiores recusandae. Nihil fugit unde vel.',
                'price' => '21990',
                'picture' => 'assets/img/deseados/sillones-8.jpg',
                'category_id' => '6',
                'featured' => false
            ],
            [
                'name' => 'Sillón Sakura White',
                'slug' => 'sillon-sakura-white',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum suscipit doloremque reiciendis ab, minus odio culpa excepturi incidunt assumenda beatae, rem dolorum nobis odit asperiores recusandae. Nihil fugit unde vel.',
                'price' => '18990',
                'picture' => 'assets/img/deseados/sillones-9.jpg',
                'category_id' => '6',
                'featured' => false
            ],
            [
                'name' => 'Mesa América',
                'slug' => 'mesa-america',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum suscipit doloremque reiciendis ab, minus odio culpa excepturi incidunt assumenda beatae, rem dolorum nobis odit asperiores recusandae. Nihil fugit unde vel.',
                'price' => '4200',
                'picture' => 'assets/img/deseados/mesas-1.jpg',
                'category_id' => '1',
                'featured' => false
            ],
            [
                'name' => 'Mesa Florencia',
                'slug' => 'mesa-florencia',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum suscipit doloremque reiciendis ab, minus odio culpa excepturi incidunt assumenda beatae, rem dolorum nobis odit asperiores recusandae. Nihil fugit unde vel.',
                'price' => '6100',
                'picture' => 'assets/img/deseados/mesas-2.jpg',
                'category_id' => '1',
                'featured' => false
            ],
            [
                'name' => 'Mesa Kretes',
                'slug' => 'mesa-kretes',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum suscipit doloremque reiciendis ab, minus odio culpa excepturi incidunt assumenda beatae, rem dolorum nobis odit asperiores recusandae. Nihil fugit unde vel.',
                'price' => '14440',
                'picture' => 'assets/img/deseados/mesas-3.jpg',
                'category_id' => '1',
                'featured' => false
            ],
            [
                'name' => 'Mesa One',
                'slug' => 'mesa-one',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum suscipit doloremque reiciendis ab, minus odio culpa excepturi incidunt assumenda beatae, rem dolorum nobis odit asperiores recusandae. Nihil fugit unde vel.',
                'price' => '7200',
                'picture' => 'assets/img/deseados/mesas-4.jpg',
                'category_id' => '1',
                'featured' => false
            ],
            [
                'name' => 'Mesa Marbella',
                'slug' => 'mesa-marbella',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum suscipit doloremque reiciendis ab, minus odio culpa excepturi incidunt assumenda beatae, rem dolorum nobis odit asperiores recusandae. Nihil fugit unde vel.',
                'price' => '9200',
                'picture' => 'assets/img/deseados/mesas-5.jpg',
                'category_id' => '1',
                'featured' => false
            ],
            [
                'name' => 'Mesa Mérida',
                'slug' => 'mesa-merida',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum suscipit doloremque reiciendis ab, minus odio culpa excepturi incidunt assumenda beatae, rem dolorum nobis odit asperiores recusandae. Nihil fugit unde vel.',
                'price' => '20600',
                'picture' => 'assets/img/deseados/mesas-6.jpg',
                'category_id' => '1',
                'featured' => false
            ],
            [
                'name' => 'Mesa Mirage',
                'slug' => 'mesa-mirage',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum suscipit doloremque reiciendis ab, minus odio culpa excepturi incidunt assumenda beatae, rem dolorum nobis odit asperiores recusandae. Nihil fugit unde vel.',
                'price' => '2370',
                'picture' => 'assets/img/deseados/mesas-7.jpg',
                'category_id' => '1',
                'featured' => false
            ],
            [
                'name' => 'Mesa 2002',
                'slug' => 'mesa-2002',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum suscipit doloremque reiciendis ab, minus odio culpa excepturi incidunt assumenda beatae, rem dolorum nobis odit asperiores recusandae. Nihil fugit unde vel.',
                'price' => '2350',
                'picture' => 'assets/img/deseados/mesas-8.jpg',
                'category_id' => '1',
                'featured' => false
            ],
            [
                'name' => 'Mesa Arrow',
                'slug' => 'mesa-arrow',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum suscipit doloremque reiciendis ab, minus odio culpa excepturi incidunt assumenda beatae, rem dolorum nobis odit asperiores recusandae. Nihil fugit unde vel.',
                'price' => '4500',
                'picture' => 'assets/img/deseados/mesas-9.jpg',
                'category_id' => '1',
                'featured' => false
            ],
            [
                'name' => 'Mesa Vigor',
                'slug' => 'mesa-vigor',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum suscipit doloremque reiciendis ab, minus odio culpa excepturi incidunt assumenda beatae, rem dolorum nobis odit asperiores recusandae. Nihil fugit unde vel.',
                'price' => '7260',
                'picture' => 'assets/img/deseados/mesas-10.jpg',
                'category_id' => '1',
                'featured' => false
            ],
            [
                'name' => 'Escritorio 3024',
                'slug' => 'escritorio-3024',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum suscipit doloremque reiciendis ab, minus odio culpa excepturi incidunt assumenda beatae, rem dolorum nobis odit asperiores recusandae. Nihil fugit unde vel.',
                'price' => '4250',
                'picture' => 'assets/img/deseados/escritorios-1.jpg',
                'category_id' => '2',
                'featured' => false
            ],
            [
                'name' => 'Escritorio 3025 White',
                'slug' => 'escritorio-3025-white',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum suscipit doloremque reiciendis ab, minus odio culpa excepturi incidunt assumenda beatae, rem dolorum nobis odit asperiores recusandae. Nihil fugit unde vel.',
                'price' => '4760',
                'picture' => 'assets/img/deseados/escritorios-2.jpg',
                'category_id' => '2',
                'featured' => false
            ],
            [
                'name' => 'Escritorio 3025 WH',
                'slug' => 'escritorio-3025-wh',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum suscipit doloremque reiciendis ab, minus odio culpa excepturi incidunt assumenda beatae, rem dolorum nobis odit asperiores recusandae. Nihil fugit unde vel.',
                'price' => '4760',
                'picture' => 'assets/img/deseados/escritorios-3.jpg',
                'category_id' => '2',
                'featured' => false
            ],
            [
                'name' => 'Escritorio 3042',
                'slug' => 'escritorio-3042',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum suscipit doloremque reiciendis ab, minus odio culpa excepturi incidunt assumenda beatae, rem dolorum nobis odit asperiores recusandae. Nihil fugit unde vel.',
                'price' => '2650',
                'picture' => 'assets/img/deseados/escritorios-4.jpg',
                'category_id' => '2',
                'featured' => false
            ],
            [
                'name' => 'Escritorio 3042 WH',
                'slug' => 'escritorio-3042-wh',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum suscipit doloremque reiciendis ab, minus odio culpa excepturi incidunt assumenda beatae, rem dolorum nobis odit asperiores recusandae. Nihil fugit unde vel.',
                'price' => '2650',
                'picture' => 'assets/img/deseados/escritorios-5.jpg',
                'category_id' => '2',
                'featured' => false
            ],
            [
                'name' => 'Escritorio 3043 WH',
                'slug' => 'escritorio-3043-wh',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum suscipit doloremque reiciendis ab, minus odio culpa excepturi incidunt assumenda beatae, rem dolorum nobis odit asperiores recusandae. Nihil fugit unde vel.',
                'price' => '3870',
                'picture' => 'assets/img/deseados/escritorios-6.jpg',
                'category_id' => '2',
                'featured' => false
            ],
            [
                'name' => 'Escritorio SC109',
                'slug' => 'escritorio-sc109',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum suscipit doloremque reiciendis ab, minus odio culpa excepturi incidunt assumenda beatae, rem dolorum nobis odit asperiores recusandae. Nihil fugit unde vel.',
                'price' => '2400',
                'picture' => 'assets/img/deseados/escritorios-7.jpg',
                'category_id' => '2',
                'featured' => false
            ],
            [
                'name' => 'Escritorio SC1250',
                'slug' => 'escritorio-sc1250',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum suscipit doloremque reiciendis ab, minus odio culpa excepturi incidunt assumenda beatae, rem dolorum nobis odit asperiores recusandae. Nihil fugit unde vel.',
                'price' => '2980',
                'picture' => 'assets/img/deseados/escritorios-8.jpg',
                'category_id' => '2',
                'featured' => false
            ],
            [
                'name' => 'Escritorio Vintage',
                'slug' => 'escritorio-vintage',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum suscipit doloremque reiciendis ab, minus odio culpa excepturi incidunt assumenda beatae, rem dolorum nobis odit asperiores recusandae. Nihil fugit unde vel.',
                'price' => '12890',
                'picture' => 'assets/img/deseados/escritorios-9.jpg',
                'category_id' => '2',
                'featured' => false
            ],
            [
                'name' => 'Silla Arrow White',
                'slug' => 'silla-arrow-white',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum suscipit doloremque reiciendis ab, minus odio culpa excepturi incidunt assumenda beatae, rem dolorum nobis odit asperiores recusandae. Nihil fugit unde vel.',
                'price' => '3150',
                'picture' => 'assets/img/deseados/sillas-1.jpg',
                'category_id' => '3',
                'featured' => false
            ],
            [
                'name' => 'Silla Houston Classic',
                'slug' => 'silla-houston-classic',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum suscipit doloremque reiciendis ab, minus odio culpa excepturi incidunt assumenda beatae, rem dolorum nobis odit asperiores recusandae. Nihil fugit unde vel.',
                'price' => '5490',
                'picture' => 'assets/img/deseados/sillas-2.jpg',
                'category_id' => '3',
                'featured' => false
            ],
            [
                'name' => 'Silla Houston Brown',
                'slug' => 'silla-houston-brown',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum suscipit doloremque reiciendis ab, minus odio culpa excepturi incidunt assumenda beatae, rem dolorum nobis odit asperiores recusandae. Nihil fugit unde vel.',
                'price' => '5490',
                'picture' => 'assets/img/deseados/sillas-3.jpg',
                'category_id' => '3',
                'featured' => false
            ],
            [
                'name' => 'Silla Linear',
                'slug' => 'silla-linear',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum suscipit doloremque reiciendis ab, minus odio culpa excepturi incidunt assumenda beatae, rem dolorum nobis odit asperiores recusandae. Nihil fugit unde vel.',
                'price' => '3690',
                'picture' => 'assets/img/deseados/sillas-4.jpg',
                'category_id' => '3',
                'featured' => false
            ],
            [
                'name' => 'Silla Linear White',
                'slug' => 'silla-linear-white',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum suscipit doloremque reiciendis ab, minus odio culpa excepturi incidunt assumenda beatae, rem dolorum nobis odit asperiores recusandae. Nihil fugit unde vel.',
                'price' => '3690',
                'picture' => 'assets/img/deseados/sillas-5.jpg',
                'category_id' => '3',
                'featured' => false
            ],
            [
                'name' => 'Silla Positano Gray',
                'slug' => 'silla-positano-gray',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum suscipit doloremque reiciendis ab, minus odio culpa excepturi incidunt assumenda beatae, rem dolorum nobis odit asperiores recusandae. Nihil fugit unde vel.',
                'price' => '5460',
                'picture' => 'assets/img/deseados/sillas-6.jpg',
                'category_id' => '3',
                'featured' => false
            ],
            [
                'name' => 'Silla Positano',
                'slug' => 'silla-positano',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum suscipit doloremque reiciendis ab, minus odio culpa excepturi incidunt assumenda beatae, rem dolorum nobis odit asperiores recusandae. Nihil fugit unde vel.',
                'price' => '5460',
                'picture' => 'assets/img/deseados/sillas-7.jpg',
                'category_id' => '3',
                'featured' => false
            ],
            [
                'name' => 'Silla Verona',
                'slug' => 'silla-verona',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum suscipit doloremque reiciendis ab, minus odio culpa excepturi incidunt assumenda beatae, rem dolorum nobis odit asperiores recusandae. Nihil fugit unde vel.',
                'price' => '5440',
                'picture' => 'assets/img/deseados/sillas-8.jpg',
                'category_id' => '3',
                'featured' => false
            ],
            [
                'name' => 'Silla Verona Brown',
                'slug' => 'silla-verona-brown',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum suscipit doloremque reiciendis ab, minus odio culpa excepturi incidunt assumenda beatae, rem dolorum nobis odit asperiores recusandae. Nihil fugit unde vel.',
                'price' => '5440',
                'picture' => 'assets/img/deseados/sillas-9.jpg',
                'category_id' => '3',
                'featured' => false
            ],
            [
                'name' => 'Cama América',
                'slug' => 'cama-america',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum suscipit doloremque reiciendis ab, minus odio culpa excepturi incidunt assumenda beatae, rem dolorum nobis odit asperiores recusandae. Nihil fugit unde vel.',
                'price' => '24400',
                'picture' => 'assets/img/deseados/camas-1.jpg',
                'category_id' => '4',
                'featured' => false
            ],
            [
                'name' => 'Cama Bel Bed',
                'slug' => 'cama-bel-bed',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum suscipit doloremque reiciendis ab, minus odio culpa excepturi incidunt assumenda beatae, rem dolorum nobis odit asperiores recusandae. Nihil fugit unde vel.',
                'price' => '16500',
                'picture' => 'assets/img/deseados/camas-2.jpg',
                'category_id' => '4',
                'featured' => false
            ],
            [
                'name' => 'Cama Belmo',
                'slug' => 'cama-belmo',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum suscipit doloremque reiciendis ab, minus odio culpa excepturi incidunt assumenda beatae, rem dolorum nobis odit asperiores recusandae. Nihil fugit unde vel.',
                'price' => '24000',
                'picture' => 'assets/img/deseados/camas-3.jpg',
                'category_id' => '4',
                'featured' => false
            ],
            [
                'name' => 'Cama Europea Balance',
                'slug' => 'cama-europea-balance',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum suscipit doloremque reiciendis ab, minus odio culpa excepturi incidunt assumenda beatae, rem dolorum nobis odit asperiores recusandae. Nihil fugit unde vel.',
                'price' => '28900',
                'picture' => 'assets/img/deseados/camas-4.jpg',
                'category_id' => '4',
                'featured' => false
            ],
            [
                'name' => 'Cama Europea Essence',
                'slug' => 'cama-europea-essence',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum suscipit doloremque reiciendis ab, minus odio culpa excepturi incidunt assumenda beatae, rem dolorum nobis odit asperiores recusandae. Nihil fugit unde vel.',
                'price' => '21000',
                'picture' => 'assets/img/deseados/camas-5.jpg',
                'category_id' => '4',
                'featured' => false
            ],
            [
                'name' => 'Cama Juvenil',
                'slug' => 'cama-juvenil',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum suscipit doloremque reiciendis ab, minus odio culpa excepturi incidunt assumenda beatae, rem dolorum nobis odit asperiores recusandae. Nihil fugit unde vel.',
                'price' => '18400',
                'picture' => 'assets/img/deseados/camas-6.jpg',
                'category_id' => '4',
                'featured' => false
            ],
            [
                'name' => 'Cama Nido',
                'slug' => 'cama-nido',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum suscipit doloremque reiciendis ab, minus odio culpa excepturi incidunt assumenda beatae, rem dolorum nobis odit asperiores recusandae. Nihil fugit unde vel.',
                'price' => '25800',
                'picture' => 'assets/img/deseados/camas-7.jpg',
                'category_id' => '4',
                'featured' => false
            ],
            [
                'name' => 'Cama Simple Modern',
                'slug' => 'cama-simple-modern',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum suscipit doloremque reiciendis ab, minus odio culpa excepturi incidunt assumenda beatae, rem dolorum nobis odit asperiores recusandae. Nihil fugit unde vel.',
                'price' => '22000',
                'picture' => 'assets/img/deseados/camas-8.jpg',
                'category_id' => '4',
                'featured' => false
            ],
            [
                'name' => 'Cama Torino',
                'slug' => 'cama-torino',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum suscipit doloremque reiciendis ab, minus odio culpa excepturi incidunt assumenda beatae, rem dolorum nobis odit asperiores recusandae. Nihil fugit unde vel.',
                'price' => '27100',
                'picture' => 'assets/img/deseados/camas-9.jpg',
                'category_id' => '4',
                'featured' => false
            ],
            [
                'name' => 'Banco Bantu',
                'slug' => 'banco-bantu',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum suscipit doloremque reiciendis ab, minus odio culpa excepturi incidunt assumenda beatae, rem dolorum nobis odit asperiores recusandae. Nihil fugit unde vel.',
                'price' => '990',
                'picture' => 'assets/img/deseados/bancos-1.jpg',
                'category_id' => '5',
                'featured' => false
            ],
            [
                'name' => 'Banco Bantu White',
                'slug' => 'banco-bantu-white',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum suscipit doloremque reiciendis ab, minus odio culpa excepturi incidunt assumenda beatae, rem dolorum nobis odit asperiores recusandae. Nihil fugit unde vel.',
                'price' => '990',
                'picture' => 'assets/img/deseados/bancos-2.jpg',
                'category_id' => '5',
                'featured' => false
            ],
            [
                'name' => 'Banco Cult',
                'slug' => 'banco-cult',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum suscipit doloremque reiciendis ab, minus odio culpa excepturi incidunt assumenda beatae, rem dolorum nobis odit asperiores recusandae. Nihil fugit unde vel.',
                'price' => '1600',
                'picture' => 'assets/img/deseados/bancos-4.jpg',
                'category_id' => '5',
                'featured' => false
            ],
            [
                'name' => 'Banco Lismaster',
                'slug' => 'banco-lismaster',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum suscipit doloremque reiciendis ab, minus odio culpa excepturi incidunt assumenda beatae, rem dolorum nobis odit asperiores recusandae. Nihil fugit unde vel.',
                'price' => '790',
                'picture' => 'assets/img/deseados/bancos-5.jpg',
                'category_id' => '5',
                'featured' => false
            ],
            [
                'name' => 'Banco Lumpur',
                'slug' => 'banco-lumpur',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum suscipit doloremque reiciendis ab, minus odio culpa excepturi incidunt assumenda beatae, rem dolorum nobis odit asperiores recusandae. Nihil fugit unde vel.',
                'price' => '1200',
                'picture' => 'assets/img/deseados/bancos-6.jpg',
                'category_id' => '5',
                'featured' => false
            ],
            [
                'name' => 'Banco María',
                'slug' => 'banco-maria',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum suscipit doloremque reiciendis ab, minus odio culpa excepturi incidunt assumenda beatae, rem dolorum nobis odit asperiores recusandae. Nihil fugit unde vel.',
                'price' => '1200',
                'picture' => 'assets/img/deseados/bancos-7.jpg',
                'category_id' => '5',
                'featured' => false
            ],
            [
                'name' => 'Banco Petit',
                'slug' => 'banco-petit',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum suscipit doloremque reiciendis ab, minus odio culpa excepturi incidunt assumenda beatae, rem dolorum nobis odit asperiores recusandae. Nihil fugit unde vel.',
                'price' => '890',
                'picture' => 'assets/img/deseados/bancos-8.jpg',
                'category_id' => '5',
                'featured' => false
            ],
            [
                'name' => 'Banco Torino',
                'slug' => 'banco-torino',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum suscipit doloremque reiciendis ab, minus odio culpa excepturi incidunt assumenda beatae, rem dolorum nobis odit asperiores recusandae. Nihil fugit unde vel.',
                'price' => '1550',
                'picture' => 'assets/img/deseados/bancos-9.jpg',
                'category_id' => '5',
                'featured' => false
            ],
            [
                'name' => 'Banco Classic Bantu',
                'slug' => 'banco-classic-bantu',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum suscipit doloremque reiciendis ab, minus odio culpa excepturi incidunt assumenda beatae, rem dolorum nobis odit asperiores recusandae. Nihil fugit unde vel.',
                'price' => '1200',
                'picture' => 'assets/img/deseados/bancos-3.jpg',
                'category_id' => '5',
                'featured' => false
            ]
        ]);
    }
}
