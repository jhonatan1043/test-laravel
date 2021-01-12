<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){

        $arrays = range(0,10);

        foreach ($arrays as $valor) {

          DB::table('products')->insert([	            
              'name' => Str::random(10),
              'purchase_price' => rand(1, 9999),
              'spending' => rand(1, 9999),
              'price_finished' => rand(9999, 999999),
              'created_at' => date("Y-m-d H:i:s"),
              'updated_at' => date("Y-m-d H:i:s"),
          ]);

        }
    }
        
}
