<?php

namespace Database\Seeders;

use App\Models\Aliment;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AlimentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Aliment::create([
            'titre' => 'Maïs',
            'energie' => '365',
            'desc' => 'Céréale riche en amidon',
            'disponible' => true
        ]);

        Aliment::create([
            'titre' => 'Blé',
            'energie' => '340',
            'desc' => 'Céréale de base pour l\'alimentation',
            'disponible' => true
        ]);

        Aliment::create([
            'titre' => 'Soja',
            'energie' => '446',
            'desc' => 'Source importante de protéines végétales',
            'disponible' => true
        ]);

        Aliment::create([
            'titre' => 'Orge',
            'energie' => '352',
            'desc' => 'Céréale rustique très nutritive',
            'disponible' => true
        ]);

        Aliment::create([
            'titre' => 'Avoine',
            'energie' => '389',
            'desc' => 'Excellente source d\'énergie',
            'disponible' => true
        ]);

        Aliment::create([
            'titre' => 'Luzerne',
            'energie' => '250',
            'desc' => 'Fourrage riche en protéines',
            'disponible' => true
        ]);

        Aliment::create([
            'titre' => 'Tourteau de colza',
            'energie' => '388',
            'desc' => 'Complément protéique',
            'disponible' => false
        ]);

        Aliment::create([
            'titre' => 'Paille',
            'energie' => '170',
            'desc' => 'Fourrage fibreux de base',
            'disponible' => true
        ]);

        Aliment::create([
            'titre' => 'Betterave fourragère',
            'energie' => '191',
            'desc' => 'Racine riche en énergie',
            'disponible' => false
        ]);

        Aliment::create([
            'titre' => 'Foin',
            'energie' => '224',
            'desc' => 'Herbe séchée pour l\'hiver',
            'disponible' => true
        ]);

    }
}
