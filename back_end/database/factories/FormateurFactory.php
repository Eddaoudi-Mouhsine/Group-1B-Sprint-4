<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Formateur;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Formateur>
 */
class FormateurFactory extends Factory
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
            "imageURL" => $this->faker->imageURL()
        ];
    }
}
