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
            'name' => 'Jose',
            'surname' => 'Deo',
            'direction' => 'San Salvador',
            'email' => 'josedeodanes99@gmail.com',
            'password' => bcrypt('jose002'),
            'role_id' => 1

        ]);
    }
}
