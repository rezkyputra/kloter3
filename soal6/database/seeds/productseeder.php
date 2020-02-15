<?php

use Illuminate\Database\Seeder;

class productseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'id' => 1,
            'id_cashier' => 1,
            'name' => "Latte",
            'id_category' => 2,
            'price' => 10000,
        ]);
        DB::table('products')->insert([
            'id' => 2,
            'id_cashier' => 2,
            'name' => "Cake",
            'id_category' => 1,
            'price' => 20000,
        ]);
        DB::table('products')->insert([
            'id' => 3,
            'id_cashier' => 3,
            'name' => "Nasi Goreng",
            'id_category' => 1,
            'price' => 45000,
        ]);
    }
}
