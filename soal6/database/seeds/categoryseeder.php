<?php

use Illuminate\Database\Seeder;

class categoryseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'id' => 1,
            'name' => "Food",
        ]);
        DB::table('categories')->insert([
            'id' => 2,
            'name' => "Drink",
        ]);
    }
}
