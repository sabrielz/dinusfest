<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KantinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tb_canteens')->insert([
					['canteen_name' => 'Cafe Elite Mul', 'canteen_owner' => 'Mulyadi', 'products' => '[{"key": "product_id", "value": [1,2,3]}]'],
					['canteen_name' => 'Cafe Superior Mul', 'canteen_owner' => 'Mulyadi', 'products' => '[{"key": "product_id", "value": [1,2,3]}]'],
					['canteen_name' => 'Cafe Mega Mul', 'canteen_owner' => 'Mulyadi', 'products' => '[{"key": "product_id", "value": [1,2,3]}]'],
				]);
    }
}
