<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\Continent;

class ContinentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $continents = Array(
            "AF" => "Africa",
            "AN" => "Antarctica",
            "AS" => "Asia",
            "EU" => "Europe",
            "NA" => "North America",
            "OC" => "Oceania",
            "SA" => "South America"
        );
        foreach ($continents as $code=>$cont)
        {
            $continent = new Continent;
            $continent->iso2=$code;
            $continent->continent=$cont;
            $continent->save();
        }
    }
}
