<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Routers',
            'image' => 'routers.png'
        ]);
        DB::table('categories')->insert([
            'name' => 'Memorias USB',
            'image' => 'Memorias USB.png'
        ]);
        DB::table('categories')->insert([
            'name' => 'Proyectores',
            'image' => 'Proyectores.png'
        ]);
        DB::table('categories')->insert([
            'name' => 'Teclado',
            'image' => 'Teclados.png'
        ]);

    }
}
