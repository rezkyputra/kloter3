<?php

use Illuminate\Database\Seeder;

class cashierseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cashiers')->insert([
            'id' => 1,
            'name' => "Pevita Pearce",
        ]);
        DB::table('cashiers')->insert([
            'id' => 2,
            'name' => "Raisa Andriana",
        ]);
        DB::table('cashiers')->insert([
            'id' => 3,
            'name' => "Rezky Putra Akkif",
        ]);
    }
}
