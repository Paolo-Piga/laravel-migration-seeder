<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\travel;

class travelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {

        for ($i = 0; $i < 20; $i++) {
            $package = new Package();

            $package->azienda = $faker->company();
            $package->stazione_partenza = $faker->city() . ', ' . $faker->streetName();
            $package->stazione_arrivo = $faker->city() . ', ' . $faker->streetName();
            $package->data_partenza = $faker->dateTime();
            $package->data_arrivo = $faker->dateTime();
            $package->prezzo = $faker->randomFloat(2, 10, 1000);
            $package->descrizione = $faker->realTextBetween($minNbChars = 160, $maxNbChars = 200, $indexSize = 2);


            $package->save();
        }

    }
}