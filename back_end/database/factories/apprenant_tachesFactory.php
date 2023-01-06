<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Apprenant;
use App\Models\Tache;
use App\Models\Apprenant_Tache;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class apprenant_tachesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $apprenant = Apprenant::all()->pluck("id")->toArray();
        $taches = Tache::all()->pluck('id')->toArray();
        return [
            "apprenant_id" => $this->faker->randomElement($apprenant),
            "tache_id" => $this->faker->randomElement($taches),
            "state" => $this->faker->randomElement(['NULL','1','0']),
            "dateDebut" =>$this->faker->date(),
            "dateFin" =>$this->faker->date(),
        ];
    }
}
