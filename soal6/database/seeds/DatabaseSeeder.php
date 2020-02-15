<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(cashierseeder::class);
        $this->call(categoryseeder::class);
        $this->call(productseeder::class);
    }
}
