<?php

use Illuminate\Database\Seeder;

class DoctorTableSeeder extends Seeder
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
            VirtualHealth\Doctor::create([
                'firstname' => $faker->firstName,
                'lastname' => $faker->lastName,
                'username' => $faker->userName,
                'email' => $faker->email,
                'password' => $faker->password,
                'about' => $faker->paragraph,
                'dob' => $faker->date(),
                'photo' => $faker->imageUrl(),
            ]);
        }
    }
}
