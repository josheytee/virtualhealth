<?php

use Illuminate\Database\Seeder;

class ChatTableSeeder extends Seeder
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
        for ($i = 0; $i < 500; $i++) {
            VirtualHealth\Chat::create([
                'session_id' => $faker->numberBetween($min, $max),
                'type' => $faker->randomElement(['text', 'image', 'document', 'audio', 'video']),
                'chatable_id' => $faker->numberBetween($min, $max),
                'chatable_type' => $faker->randomElement(['VirtualHealth\Doctor', 'VirtualHealth\User']),
                'data' => $faker->text(150),
                'read_at' => $faker->dateTime
            ]);
        }
    }
}
