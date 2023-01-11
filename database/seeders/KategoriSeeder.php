<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tb_category_products')->insert([
            ['category_name' => 'Gorengan'],
            ['category_name' => 'Minuman'],
            ['category_name' => 'Makanan'],
        ]);
    }
}
