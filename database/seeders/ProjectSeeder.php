<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;
use App\Models\Type;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        /* for now we'll use fake names for the repos,
        later we'll use the real names */

        $types_id = Type::all()->pluck("id");
        /* dd($types); */

        for ($i = 0; $i < 50; $i++) {
            $project = new Project;
            $project->type_id = $faker->randomElement($types_id);
            $project->name_project = $faker->catchPhrase();
            $project->description = $faker->paragraphs(4, true);
            $project->slug = Str::slug($project->name_project);
            $project->save();
        }

/*          $project = new Project;
            $project->name_project = "Boolando";
            $project->description = "Frontend template of boolando";
            $project->slug = Str::slug($project->name_project);
            $project->save(); */
    }
}
