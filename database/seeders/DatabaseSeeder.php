<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Tarea;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Tarea::factory(10)->create();
        User::create([
            'name' => 'Tester',
            'email' => 'test@example.com',
            'password' => Hash::make('password123'), // contraseña de prueba
        ]);

        User::factory(5)->create();
    }
}
