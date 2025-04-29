<?php

namespace Database\Seeders;

use App\Models\Nutriment;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class NutrimentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Nutriment::create([
            'titre' => 'Mon premier nutriment',
            'desc' => 'Lorem ipsum...',
        ]);
        Nutriment::create([
            'titre' => 'Mon premquinzieme  nutriment',
            'desc' => 'Lorem ipsum...',
        ]);
        Nutriment::create([
            'titre' => 'Mon douzieme nutriment',
            'desc' => 'Lorem ipsum...',
        ]);
        Nutriment::create([
            'titre' => 'Mon onzieme nutriment',
            'desc' => 'Lorem ipsum...',
        ]);
        Nutriment::create([
            'titre' => 'Mon huitieme nutriment',
            'desc' => 'Lorem ipsum...',
        ]);
        Nutriment::create([
            'titre' => 'Mon premseptieme  nutriment',
            'desc' => 'Lorem ipsum...',
        ]);
        Nutriment::create([
            'titre' => 'Mon sixieme nutriment',
            'desc' => 'Lorem ipsum...',
        ]);
        Nutriment::create([
            'titre' => 'Mon cinquieme nutriment',
            'desc' => 'Lorem ipsum...',
        ]);
        Nutriment::create([
            'titre' => 'Mon quatrieme nutriment',
            'desc' => 'Lorem ipsum...',
        ]);
        Nutriment::create([
            'titre' => 'Mon troisieme nutriment',
            'desc' => 'Lorem ipsum...',
        ]);
        Nutriment::create([
            'titre' => 'Mon deuxieme nutriment',
            'desc' => 'Lorem ipsum...',
        ]);
    }
}
