<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\User;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::all();
        $projects = Project::factory(200)
            ->make()
            ->each(function($project) use ($users){
                $project->author_id = ($users->random())->id;
                $project->save();
            })
        ;
        //add many-to-many connections
        print "attach Users to Projects".PHP_EOL;
        foreach (Project::all() as $project)
        {
            $users_in_project = $users->random(rand(2,5))->pluck('id');
            //$users_in_project = $users->random(10)->pluck('id');
            $project->linked_users()->attach($users_in_project);
        }
    }
}
