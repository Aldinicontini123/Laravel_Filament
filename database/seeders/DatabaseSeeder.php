<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Crear el usuario admin
        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin1@gmail.com',
            'password' => '12345678'
        ]);

        // Configuración de categorías
        $categories = [
            ['name' => 'Estudios', 'slug' => 'estudios'],
            ['name' => 'Analisis', 'slug' => 'analisis'],
            ['name' => 'Entretenimiento', 'slug' => 'entretenimiento'],
        ];

        // Crear las categorías
        foreach ($categories as $category) {
            Category::factory()->create($category);
        }
    }
}
