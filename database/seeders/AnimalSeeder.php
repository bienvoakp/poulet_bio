<?php

namespace Database\Seeders;

use App\Models\Animal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnimalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Animal::create([
            'titre' => 'Bella',
            'desc' => 'Vache laitière de 4 ans en bonne santé',
            'race_id' => 1,
        ]);

        Animal::create([
            'titre' => 'Max',
            'desc' => 'Taureau reproducteur de race pure',
            'race_id' => 2,
        ]);

        Animal::create([
            'titre' => 'Luna',
            'desc' => 'Génisse de 18 mois prête pour la reproduction',
            'race_id' => 1,
        ]);

        Animal::create([
            'titre' => 'Rocky',
            'desc' => 'Veau mâle de 6 mois en bonne croissance',
            'race_id' => 3,
        ]);

        Animal::create([
            'titre' => 'Daisy',
            'desc' => 'Vache allaitante avec une excellente production',
            'race_id' => 2,
        ]);

        Animal::create([
            'titre' => 'Duke',
            'desc' => 'Taureau de 5 ans avec bon historique de reproduction',
            'race_id' => 3,
        ]);

        Animal::create([
            'titre' => 'Rose',
            'desc' => 'Génisse de race pure de 2 ans',
            'race_id' => 1,
        ]);

        Animal::create([
            'titre' => 'Zeus',
            'desc' => 'Jeune taureau prometteur de 15 mois',
            'race_id' => 2,
        ]);

        Animal::create([
            'titre' => 'Flora',
            'desc' => 'Vache laitière primée aux concours régionaux',
            'race_id' => 3,
        ]);

        Animal::create([
            'titre' => 'Oscar',
            'desc' => 'Veau femelle de 3 mois en bonne santé',
            'race_id' => 1,
        ]);
    }
}
