<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Brief;
use App\Models\Tache;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class tachesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $Brief = Brief::all()->pluck("id")->toArray();

        return [
            "name" => $this->faker->name(),
            "description" => $this->faker->text(),
            "brief_id" => $this->faker->randomElement($Brief),
            "duree" => $this->faker->randomNumber(1),

        ];
    }
}
