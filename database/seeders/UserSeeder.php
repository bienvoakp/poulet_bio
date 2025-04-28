<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::updateOrCreate([
            'email' => 'bienvenuakpo@poultry.com',
        ], [
            'name' => 'Poultry Admin User',
            'password' => Hash::make('Dile25$$99'),
            'statut' => 'admin',
            'email_verified_at' => now()
        ]);

        $user->assignRole('Admin');
    }
}
