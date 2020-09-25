<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $url_contry='http://country.io/names.json';
        $url_continent='http://country.io/continent.json';
        print "Loading actual countries".PHP_EOL;
        $countries_json = file_get_contents($url_contry);
        $countries=json_decode($countries_json,true);
        //dd($countries);
        print "Loading countries to continent connections".PHP_EOL;
        $continents_json = file_get_contents($url_continent);
        $continents = json_decode($continents_json,true);
        //dd($continents);
        //+"AX": "EU"
        //+"AZ": "AS"
        //+"IE": "EU"
        $continents_bd = \App\Models\Continent::all();
        //dd();
        //dd($continents_bd);
        print "Making table Countries...".PHP_EOL;
        foreach ($countries as $cnt_id=>$cnt_name)
        {
            $country = new \App\Models\Country;
            $country->iso2 = $cnt_id;
            $country->country = $cnt_name;
            $continent_2letters = $continents[$cnt_id];

            $country->continent_id = $continents_bd->firstWhere('iso2', $continent_2letters)->id;
            $country->save();
        }

    }
}
