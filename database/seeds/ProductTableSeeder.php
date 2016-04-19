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
        \CodeProject\Entities\Product::truncate();
        factory(\CodeProject\Entities\Product::class, 10)->create();
    }
}
