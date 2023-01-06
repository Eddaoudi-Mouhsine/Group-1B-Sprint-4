<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Apprenant;
use App\Models\Groupe;
use App\Models\Apprenant_Groupe;



/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class apprenant_groupesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $apprenant = Apprenant::all()->pluck("id")->toArray();
        $groupe = Groupe::all()->pluck("id")->toArray();
        return [
            "apprenant_id" => $this->faker->randomElement($apprenant),
            "groupe_id" => $this->faker->randomElement($groupe),
        ];
    }
}
