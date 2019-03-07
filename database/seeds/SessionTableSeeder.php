<?php

use Illuminate\Database\Seeder;

class SessionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('en');
        $min = 1;
        $max = 100;
        for ($i = 0; $i < 100; $i++) {
            VirtualHealth\Session::create([
                'user_id' => $faker->numberBetween($min, $max),
                'doctor_id' => $faker->numberBetween($min, $max),
            ]);
        }
    }
}
