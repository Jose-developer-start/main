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
        DB::table('rols')->insert([
            'name' => 'Administrador'
        ]);
        DB::table('rols')->insert([
            'name' => 'Usuario'
        ]);
    }
}
