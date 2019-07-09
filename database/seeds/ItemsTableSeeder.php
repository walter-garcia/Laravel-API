<?php

use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
        	['item' => 'ammunition', 'points' => 1],
        	['item' => 'medication', 'points' => 2],
        	['item' => 'food', 'points' => 3],
        	['item' => 'water', 'points' => 4]
        ]);
    }
}
