<?php

use Illuminate\Database\Seeder;
use App\Feature;

class FeaturesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $features = ["Air Conditioning", "Swimming Pool", "Cenral Heating", "Laundry Room", "Gym", "Alarm", "Window Covering"];

        foreach($features as $row){

        	$feature = new Feature();
        	$feature->name = $row;
        	$feature->save();
        }

    }
}
