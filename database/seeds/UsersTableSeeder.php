<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
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
            VirtualHealth\User::create([
                'firstname' => $faker->firstName,
                'lastname' => $faker->lastName,
                'username' => $faker->userName,
                'email' => $faker->email,
                'password' => $faker->password,
                'dob' => $faker->date(),
                'photo' => $faker->imageUrl(),
            ]);
        }
    }
}
