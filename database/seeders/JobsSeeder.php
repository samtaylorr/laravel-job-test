<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Jobs;

class JobsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();
        for($i = 0; $i < 50; $i++) {
            Jobs::create([
                'title' => $faker->name,
                'description' => $faker->sentence
            ]);
        }
    }
}
