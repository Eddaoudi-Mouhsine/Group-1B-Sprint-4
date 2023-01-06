<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\AnnéeFormation;
class traningYearFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "année_formation" => $this->faker->year()."-".$this->faker->year(),

        ];
    }
}
