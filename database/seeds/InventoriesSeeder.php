<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InventoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('inventories')->insert([
            'stock' => 40,
            'status' => 1,
            'product_id' => 1
        ]);
        DB::table('inventories')->insert([
            'stock' => 10,
            'status' => 1,
            'product_id' => 2
        ]);
        DB::table('inventories')->insert([
            'stock' => 5,
            'status' => 1,
            'product_id' => 3
        ]);
    }
}
