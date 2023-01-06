<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AnnéeFormation;
use App\Models\Apprenant;
use App\Models\Brief;
use App\Models\Formateur;
use App\Models\Tache;
use App\Models\Groupe;
use App\Models\Apprenant_Tache;
use App\Models\Apprenant_Groupe;
use App\Models\Apprenant_Brief;
use Database\Factory\traningYearFactory;
use Database\Factory\ApprenantFactory;
use Database\Factory\briefsFactory;
use Database\Factory\FormateurFactory;
use Database\Factory\groupesFactory;
use Database\Factory\tachesFactory;
use Database\Factory\apprenant_tachesFactory;
use Database\Factory\apprenant_groupesFactory;
use Database\Factory\apprenant_briefFactory;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        traningYear::factory(2)->create();
        Apprenant::factory(20)->create();
        Formateur::factory(2)->create();
        Brief::factory(6)->create();
        Groupe::factory(2)->create();
        Tache::factory(10)->create();
        Apprenant_Tache::factory(20)->create();
        Apprenant_Groupe::factory(5)->create();
        Apprenant_Brief ::factory(5)->create();

    }
}
