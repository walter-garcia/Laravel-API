<?php

use Illuminate\Database\Seeder;

class SurvivorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	factory(\App\Survivor::class, 20)->create();
    }
}
