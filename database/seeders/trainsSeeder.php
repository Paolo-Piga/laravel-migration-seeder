<?php
namespace Database\Seeders;
use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
class trainsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 20; $i++) {
            $train = new Train();

            $train->azienda = $faker->randomElement(['italo', 'trenitalia', 'frecciarossa']);
            $train->stazione_partenza = $faker->randomElement(['Roma termini', 'Torino Porta nuova', 'Napoli', 'Milano', 'Bari', 'Bologna', 'Firenze']);
            $train->stazione_arrivo = $faker->randomElement(['Roma termini', 'Torino Porta nuova', 'Napoli', 'Milano', 'Bari', 'Bologna', 'Firenze']);
            $train->azienda = $faker->company();
            $train->stazione_partenza = $faker->city() . ', ' . $faker->streetName();
            $train->stazione_arrivo = $faker->city() . ', ' . $faker->streetName();
            $train->orario_partenza = $faker->time('H:i');
            $train->orario_arrivo = $faker->time('H:i');
            $train->codice_treno = $faker->unique()->numberBetween(10000, 999999);
            $train->numero_carrozze = $faker->numberBetween(3, 10);
            $train->in_orario = $faker->boolean();
            $train->cancellato = $faker->boolean();
            $train->save();
        }
       
    }
}