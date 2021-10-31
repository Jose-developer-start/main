<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'surname' => 'Prueba',
            'direction' => 'San Salvador',
            'email' => 'admin@gmail.com',
            'phone' => 74473243,
            'password' => bcrypt('admin'),
            'role_id' => 1

        ]);
    }
}
