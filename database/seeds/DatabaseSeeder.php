<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(RolsTableSeeder::class);
        //$this->call(UserSeeder::class);
        //$this->call(CategoryTableSeeder::class);
        //$this->call(SuppliersTableSeeder::class);
        //$this->call(BrandsTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
    }
}
