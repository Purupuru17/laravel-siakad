<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        
        User::create([
            'name' => 'Galih Bayu',
            'email' => 'galih@puru.com',
            'email_verified_at' => now(),
            'password' => Hash::make('12345'),
            'roles' => 'mahasiswa',
            
        ]);
    }
}
