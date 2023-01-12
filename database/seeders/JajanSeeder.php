<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JajanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tb_products')->insert([
            ['category_id' => 1, 'product_name' => 'Tempe Goreng', 'product_price' => 1000],
            ['category_id' => 1, 'product_name' => 'Bakwan', 'product_price' => 1000],
            ['category_id' => 1, 'product_name' => 'Risoles', 'product_price' => 1000],
            ['category_id' => 1, 'product_name' => 'Tahu', 'product_price' => 1000],
            ['category_id' => 2, 'product_name' => 'Teh Gulabatu', 'product_price' => 1000],
            ['category_id' => 2, 'product_name' => 'Jus Lemon', 'product_price' => 1000],
            ['category_id' => 2, 'product_name' => 'Jus Apel', 'product_price' => 1000],
            ['category_id' => 2, 'product_name' => 'Air Mineral', 'product_price' => 2000],
            ['category_id' => 3, 'product_name' => 'Wafer', 'product_price' => 2000],
            ['category_id' => 3, 'product_name' => 'Roti Tawar', 'product_price' => 2000],
            ['category_id' => 3, 'product_name' => 'Roti Gandum', 'product_price' => 2000],
            ['category_id' => 3, 'product_name' => 'Mie Goreng', 'product_price' => 4000],
        ]);
    }
}
