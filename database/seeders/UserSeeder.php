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
        User::create([
            'name' => 'Poultry Admin User',
            'email' => 'bienvenuakpo@poultry.com',
            'password' => Hash::make('Dile25$$99'), // Change this to a secure password
        ]);
    }
}
