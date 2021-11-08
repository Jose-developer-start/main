<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('rols')->insert([
            'name' => 'Administrador'
        ]);
        DB::table('rols')->insert([
            'name' => 'Usuario'
        ]);
    }
}
