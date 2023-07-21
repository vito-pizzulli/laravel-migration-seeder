<?php

namespace Database\Seeders;

use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $agencies = [
            "Trenitalia",
            "Italo Treno"
        ];

        $stations = [
            "Roma Termini",
            "Bologna Centrale",
            "Napoli Centrale",
            "Milano Centrale",
            "Roma Tiburtina",
            "Torino Porta Nuova",
            "Firenze Santa Maria Novella",
            "Venezia Santa Lucia",
            "Bergamo",
            "Padova",
            "Verona Porta Nuova",
            "Napoli Centrale",
            "Bari Centrale"
        ];

        for ($i = 0; $i < 50; $i++) {
            $newTrain = new Train();
            $newTrain->agency = $faker->randomElement($agencies);
            $newTrain->departure_station = $faker->randomElement($stations);
            do {
                $newTrain->arrival_station = $faker->randomElement($stations);
            } while ($newTrain->arrival_station === $newTrain->departure_station);
            $newTrain->departure_time = $faker->dateTimeBetween('2023-07-01', '2023-07-31');
            $newTrain->arrival_time = clone $newTrain->departure_time;
            $newTrain->arrival_time->modify("+{$faker->numberBetween(1, 5)} hours");
            $newTrain->train_code = $faker->numberBetween(0, 9999);
            $newTrain->carriages_number = $faker->numberBetween(5, 15);
            $newTrain->isOnTime = $faker->numberBetween(0, 1);
            $newTrain->isCancelled = $faker->numberBetween(0, 1);
            $newTrain->save();
        }
    }
}
