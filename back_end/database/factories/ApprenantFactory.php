<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Apprenant;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Apprenant>
 */
class ApprenantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "nom" => $this->faker->lastName(),
            "prenom" => $this->faker->firstName(),
            "email" => $this->faker->unique()->safeEmail(),
            "tele" => $this->faker->phoneNumber(),
            "address" => $this->faker->streetAddress(),
            "imageURL" => $this->faker->imageURL()
        ];
    }
}
