<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Apprenant;
use App\Models\Brief;
use App\Models\Apprenant_Brief;





/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\apprenant_brief>
 */
class apprenant_briefFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $apprenant = Apprenant::all()->pluck("id")->toArray();
        $brief = Brief::all()->pluck("id")->toArray();
        return [
            "apprenant_id" => $this->faker->randomElement(),
            "brief_id" => $this->faker->randomElement(),
            "dateDebut" =>$this->faker->date(),
        ];
    }
}
