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
            'name' => 'Pantalla 5K',
            'description' => 'Pantlla full hd 4k de color negro',
            'purchase_price' => 250,
            'sale_price' => 300,
            'model' => 'at102md',
            'image' => 'sony.png',
            'brand_id' => 1,
            'supplier_id' => 1,
            'category_id' => 1
        ]);
    }
}
