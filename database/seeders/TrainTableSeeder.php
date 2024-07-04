<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {

        //Creo UN treno
        $newRecord = new Train();
        $newRecord->azienda = "Forteventura";
        $newRecord->stazione_di_partenza = "Genova";
        $newRecord->stazione_di_arrivo = "Palermo";
        $newRecord->orario_di_partenza = $faker->dateTime();
        $newRecord->orario_di_arrivo = $faker->dateTime();
        $newRecord->codice_treno = 154214;
        $newRecord->numero_di_carozze = 3;
        $newRecord->in_orario = "SI";
        $newRecord->cancellato = "No";
        $newRecord->save();

        //Poi, per 11 volte...
        for ($i = 0; $i < 11; $i++) {
            //Creo UN gioco
            $newRecord = new Train();
            $newRecord->azienda = $faker->word(1);
            $newRecord->stazione_di_partenza = $faker->word(1);
            $newRecord->stazione_di_arrivo = $faker->word(1);
            $newRecord->orario_di_partenza = $faker->dateTime();
            $newRecord->orario_di_arrivo = $faker->dateTime();
            $newRecord->codice_treno = 154214;
            $newRecord->numero_di_carozze = 3;
            $newRecord->in_orario = "SI";
            $newRecord->cancellato = "No";
            $newRecord->save();
        }
    }
}
