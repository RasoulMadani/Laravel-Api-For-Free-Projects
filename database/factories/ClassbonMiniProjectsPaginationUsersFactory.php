<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ClassbonMiniProjectsPaginationUsers>
 */
class ClassbonMiniProjectsPaginationUsersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'skills' => fake()->name(),
            'mobile' => fake()->name(),
            'email' => fake()->name(),
            // 'imageUrl' => fake()->image(public_path('storage/images'), 640, 480, null, false),
            'imageUrl' => fake()->name(),
            'facebook' => fake()->name(),
            'twitter' => fake()->name(),
            'linkedin' => fake()->name(),
            'telegram' => fake()->name()
        ];
    }
}
