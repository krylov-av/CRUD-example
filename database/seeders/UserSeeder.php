<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\Country;
use \App\Models\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countries = Country::all();
        $users = User::factory(100)
            ->make()
            ->each(function($user) use ($countries){
                $user->country_id = ($countries->random())->id;
                $user->save();
            })
        ;
    }
}
