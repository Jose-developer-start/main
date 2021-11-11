<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SuppliersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('suppliers')->insert([
            'name' => 'Sony',
            'direction' => 'San salvador',
            'phone' => 75738383,
            'image' =>'image1.png'
        ]);
    }
}
