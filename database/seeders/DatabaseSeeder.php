<?php

namespace Database\Seeders;

use App\Models\Country;
use App\Models\User;
use Illuminate\Database\Seeder;
use \Database\Seeders\ContinentSeeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            ContinentSeeder::class,
            CountrySeeder::class,
            UserSeeder::class,
            ProjectSeeder::class,
            LabelSeeder::class,
        ]);
    }
}
