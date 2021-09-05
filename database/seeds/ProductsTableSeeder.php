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
            'name' => 'Teclado Gamer',
            'description' => 'Luces RGBA y teclado mecanico',
            'purchase_price' => 250,
            'sale_price' => 300,
            'model' => 'at102md',
            'image' => 'sony.png',
            'brand_id' => 1,
            'supplier_id' => 1,
            'category_id' => 4
        ]);
        DB::table('products')->insert([
            'name' => 'Router OMEGA',
            'description' => 'Soporte bandas 3.5 Ghz y 5',
            'purchase_price' => 250,
            'sale_price' => 300,
            'model' => 'at102md',
            'image' => 'sony.png',
            'brand_id' => 1,
            'supplier_id' => 1,
            'category_id' => 2
        ]);
        DB::table('products')->insert([
            'name' => 'Memoria USB',
            'description' => 'USB 3.0 con tecnologia 3.5',
            'purchase_price' => 250,
            'sale_price' => 300,
            'model' => 'at102md',
            'image' => 'sony.png',
            'brand_id' => 1,
            'supplier_id' => 1,
            'category_id' => 3
        ]);
    }
}
