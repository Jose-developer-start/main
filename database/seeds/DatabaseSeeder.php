<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->truncateTable(['rols','users','categories','suppliers','brands','products','inventories']);
        $this->call(RolsTableSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(SuppliersTableSeeder::class);
        $this->call(BrandsTableSeeder::class);
        $this->call(InventoriesSeeder::class);
        $this->call(ProductsTableSeeder::class);
    }
    public function truncateTable($table = array()){
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        for ($i = 0; $i < count($table); $i++){
            DB::table($table[$i])->truncate();
        }
        
    }
}
