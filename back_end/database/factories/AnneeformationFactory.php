<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\AnnéeFormation;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class traningYear extends Factory
{

    public function definition()
    {
        return [
            "année_formation" => $this->faker->year()."-".$this->faker->year(),
        ];
    }
}
