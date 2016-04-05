<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \CodeProject\Product::truncate();
        factory(\CodeProject\Product::class, 10)->create();
    }
}
