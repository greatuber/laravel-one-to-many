<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Type;
use Faker\Generator as Faker;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

            $type = new Type;
            $type->label = "Fullstack";
            $type->color = $faker->hexColor();
            $type->save();

            $type = new Type;
            $type->label = "Backend";
            $type->color = $faker->hexColor();
            $type->save();

            $type = new Type;
            $type->label = "Frontend";
            $type->color = $faker->hexColor();
            $type->save();
    }
}
