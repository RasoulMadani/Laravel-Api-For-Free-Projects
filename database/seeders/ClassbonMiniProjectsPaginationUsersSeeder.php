<?php

namespace Database\Seeders;

use App\Models\ClassbonMiniProjectsPaginationUsers;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClassbonMiniProjectsPaginationUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $faker = \Faker\Factory::create();
        // for ($i = 0; $i < 6; $i++) {
        //     ClassbonMiniProjectsPaginationUsers::create([
        //         'name' => $faker->name(), 
        //         'skills' => $faker->name(), 
        //         'mobile' => $faker->name(), 
        //         'email' => $faker->name(), 
        //         'imageUrl' => $faker->name(), 
        //         'facebook' => $faker->name(),
        //         'twitter' => $faker->name(), 
        //         'linkedin' => $faker->name(), 
        //         'telegram' => $faker->name()
        //     ]);
        // }
        // \App\Models\ClassbonMiniProjectsPaginationUsers::factory(10)->create();

        \App\Models\ClassbonMiniProjectsPaginationUsers::factory()->create([
            'name' => "عباس سپهوند",
            'skills' => "توسعه دهنده وب",
            'mobile' => "09166633200",
            'email' => "Abbassep3200@gmail.com",
            // 'imageUrl' => fake()->image(public_path('storage/images'), 640, 480, null, false),
            'imageUrl' => 'https://rasoulmadani.com/' .'storage/images/avatar-1.jpg',
            'facebook' => "facebook@fa.com",
            'twitter' => "Abbas@twitter.com",
            'linkedin' => "abbas-sep@linkedin",
            'telegram' => "te/451000"
        ]);
        \App\Models\ClassbonMiniProjectsPaginationUsers::factory()->create([
            'name' => "علی حسینی",
            'skills' => "توسعه دهنده وب",
            'mobile' => "09122241512",
            'email' => "ali@gmail.com",
            // 'imageUrl' => fake()->image(public_path('storage/images'), 640, 480, null, false),
            'imageUrl' => 'https://rasoulmadani.com/' .'storage/images/avatar-2.jpg',
            'facebook' => "facebook@fa.com",
            'twitter' => "Abbas@twitter.com",
            'linkedin' => "abbas-sep@linkedin",
            'telegram' => "te/451000"
        ]);
        \App\Models\ClassbonMiniProjectsPaginationUsers::factory()->create([
            'name' => "احسان اکبر",
            'skills' => "توسعه دهنده وب",
            'mobile' => "09166633200",
            'email' => "Abbassep3200@gmail.com",
            // 'imageUrl' => fake()->image(public_path('storage/images'), 640, 480, null, false),
            'imageUrl' => 'https://rasoulmadani.com/' .'storage/images/avatar-3.jpg',
            'facebook' => "facebook@fa.com",
            'twitter' => "Abbas@twitter.com",
            'linkedin' => "abbas-sep@linkedin",
            'telegram' => "te/451000"
        ]);
        \App\Models\ClassbonMiniProjectsPaginationUsers::factory()->create([
            'name' => "رضا یزدانی",
            'skills' => "توسعه دهنده وب",
            'mobile' => "09166343200",
            'email' => "Abbassep3200@gmail.com",
            // 'imageUrl' => fake()->image(public_path('storage/images'), 640, 480, null, false),
            'imageUrl' => 'https://rasoulmadani.com/' .'storage/images/avatar-4.jpg',
            'facebook' => "facebook@fa.com",
            'twitter' => "Abbas@twitter.com",
            'linkedin' => "abbas-sep@linkedin",
            'telegram' => "te/451000"
        ]);
        \App\Models\ClassbonMiniProjectsPaginationUsers::factory()->create([
            'name' => "محمد احمدی",
            'skills' => "توسعه دهنده وب",
            'mobile' => "09122241512",
            'email' => "ali@gmail.com",
            // 'imageUrl' => fake()->image(public_path('storage/images'), 640, 480, null, false),
            'imageUrl' => 'https://rasoulmadani.com/' .'storage/images/avatar-5.jpg',
            'facebook' => "facebook@fa.com",
            'twitter' => "Abbas@twitter.com",
            'linkedin' => "abbas-sep@linkedin",
            'telegram' => "te/451000"
        ]);
        \App\Models\ClassbonMiniProjectsPaginationUsers::factory()->create([
            'name' => "سحین اسماعیلی",
            'skills' => "توسعه دهنده وب",
            'mobile' => "09166633200",
            'email' => "Abbassep3200@gmail.com",
            // 'imageUrl' => fake()->image(public_path('storage/images'), 640, 480, null, false),
            'imageUrl' => 'https://rasoulmadani.com/' .'storage/images/avatar-6.jpg',
            'facebook' => "facebook@fa.com",
            'twitter' => "Abbas@twitter.com",
            'linkedin' => "abbas-sep@linkedin",
            'telegram' => "te/451000"
        ]);
    }
}
