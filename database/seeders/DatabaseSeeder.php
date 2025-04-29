<?php

use App\Models\Nutriment;
use App\Models\User;
use Database\Seeders\AlimentSeeder;
use Database\Seeders\AnimalSeeder;
use Database\Seeders\NutrimentSeeder;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\PermissionSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $this->call([
            PermissionSeeder::class,
            UserSeeder::class,
            NutrimentSeeder::class,
            AlimentSeeder::class,
            AnimalSeeder::class,
        ]);
    }
}
