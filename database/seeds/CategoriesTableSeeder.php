<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['name' => 'Sin Categoría', 'slug' => 'sin-categoria'],
            ['name' => 'Escritorios', 'slug' => 'escritorios'],
            ['name' => 'Sillas', 'slug' => 'sillas'],
            ['name' => 'Camas', 'slug' => 'camas'],
            ['name' => 'Bancos', 'slug' => 'bancos'],
            ['name' => 'Sillones', 'slug' => 'sillones']
        ]);
    }
}
