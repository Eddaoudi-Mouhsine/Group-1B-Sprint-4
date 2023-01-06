<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\AnnéeFormation;
use App\Models\Formateur;
use App\Models\Groupe;



/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class groupesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $anneeFormation = AnnéeFormation::all()->pluck("id")->toArray();
        $formateur = Formateur::all()->pluck("id")->toArray();

            return [
                "name" => $this->faker->name(),
                "logo" => $this->faker->imageURL(),
                "anneeformation_id" => $this->faker->randomElement($anneeFormation),
                "formateur_id" => $this->faker->randomElement($formateur),
            ];
    }
}
