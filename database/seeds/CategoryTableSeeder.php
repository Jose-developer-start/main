<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Routers',
            'image' => 'categories/yVhZZ3NSFaYmK4GmvaF4ly9e3ULUKAWujVxX6FPF.jpg'
        ]);
        DB::table('categories')->insert([
            'name' => 'Memorias USB',
            'image' => 'categories/IuAE086p6c9pqwN2F3LHNT25KXYFBe7pLSqLkJRE.jpg'
        ]);
        DB::table('categories')->insert([
            'name' => 'Proyectores',
            'image' => 'categories/uduOW49qRp0AcOv3OyeGImn6t31NY3E38KfU8E5y.jpg'
        ]);
        DB::table('categories')->insert([
            'name' => 'Teclado',
            'image' => 'categories/BszsKxCzg6jrJ2L8EFR2JkA3dsoGLbVn0ZOoz85O.jpg'
        ]);

    }
}
