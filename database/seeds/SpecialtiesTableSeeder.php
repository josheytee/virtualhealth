<?php

use Illuminate\Database\Seeder;

class SpecialtiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('en');
        for ($i = 0; $i < 100; $i++) {
            VirtualHealth\Specialty::create([
                'name' => $faker->word,
                'slug' => $faker->slug,
                'description'=>$faker->words(28,true),
                'photo' => $faker->imageUrl(),
            ]);
        }
    }
}
