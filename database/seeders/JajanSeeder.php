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
            ['category_id' => 2, 'product_name' => 'Tea Jus Gulabatu', 'product_price' => 1000],
            ['category_id' => 2, 'product_name' => 'Tea Jus Lemon', 'product_price' => 1000],
            ['category_id' => 2, 'product_name' => 'Tea Jus Apel', 'product_price' => 1000],
            ['category_id' => 2, 'product_name' => 'Marimas Anggur', 'product_price' => 1000],
            ['category_id' => 2, 'product_name' => 'Marimas Jeruk Peras', 'product_price' => 1000],
            ['category_id' => 2, 'product_name' => 'Le Mineral', 'product_price' => 2000],
            ['category_id' => 2, 'product_name' => 'Aqua', 'product_price' => 2500],
            ['category_id' => 3, 'product_name' => 'Nabati', 'product_price' => 2000],
            ['category_id' => 3, 'product_name' => 'Aoka', 'product_price' => 2000],
            ['category_id' => 3, 'product_name' => 'Roma Sari Gandum', 'product_price' => 2000],
            ['category_id' => 3, 'product_name' => 'Pop Mie', 'product_price' => 4000],
        ]);
    }
}
