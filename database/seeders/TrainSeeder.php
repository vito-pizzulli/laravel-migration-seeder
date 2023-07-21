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
    public function run()
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
    }
}
