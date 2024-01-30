<?php

namespace Database\Seeders;

use Faker\Generator as Faker;
use App\Models\Train;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i=0; $i < 100 ; $i++) { 
            $newTrain = new Train();
            $newTrain->azienda = $faker->randomElement(['Trenitalia',' EsercizioSrl','TrenordSpA','Ferroviaria','Rail SpA']);
            $newTrain->stazione_partenza = $faker->randomElement(['Torino','Roma','Milano','Bologna']);
            $newTrain->stazione_arrivo = $faker->randomElement(['Trieste','Foggia','Udine','Monfalcone']);
            $newTrain->orario_partenza = $faker->time();
            $newTrain->orario_arrivo = $faker->time();
            $newTrain->codice_treno = $faker->numberBetween(0, 100);
            $newTrain->n_carrozze = $faker->numberBetween(0, 20);
            $newTrain->in_orario = $faker->numberBetween(0, 1);
            $newTrain->cancellato = $faker->numberBetween(0, 1);
            $newTrain->save();
        }
    }
}
