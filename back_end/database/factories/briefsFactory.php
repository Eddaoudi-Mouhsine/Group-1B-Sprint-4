<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Formateur;
use App\Models\Brief;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class briefsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $formateur = App\Models\Formateur::all()->pluck("id")->toArray();

        return [
            "name" => $this->faker->name(),
            "description" => $this->faker->text(),
            "duree" => $this->faker->randomNumber(1),
            "formateur_id" => $this->faker->randomElement($formateur),
        ];
    }
}
