<?php

namespace Database\Seeders;

use App\Models\Label;
use App\Models\Project;
use Illuminate\Database\Seeder;

class LabelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Label::factory(15)->create();

        print "Attach Labels to projects...".PHP_EOL;
        //$projects = Project::all();
        //foreach (Label::all() as $label)
        //{
        //    $projects_will_have_labels = $projects->random(rand(1,4))->pluck('id');
        //    $label->linked_projects()->attach($projects_will_have_labels);
        //}
        $labels = Label::all();
        foreach (Project::all() as $project)
        {
            $label_attached_to_project = $labels->random(rand(1,4))->pluck('id');
            $project->linked_labels()->attach($label_attached_to_project);
        }
    }
}
