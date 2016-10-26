<?php

use Illuminate\Database\Seeder;
use App\Item;

class ItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
	    foreach (range(1, 50) as $i) {
	      Item::create([
	        'title'         => $faker->company,
	        'description'	=> $faker->sentence($nbWords = 6, $variableNbWords = true)
	      ]);
	    }
    }
}
