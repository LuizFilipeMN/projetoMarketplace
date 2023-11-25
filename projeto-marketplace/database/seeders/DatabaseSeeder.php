<?php

namespace Database\Seeders;

use App\Models\Loja as AppLoja;
use Illuminate\Database\Seeder;
use App\Models\Produto;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // Seed para Lojas
        AppLoja::factory(5)->create();

        // Seed para Produtos relacionados às Lojas
        AppLoja::all()->each(function ($loja) {
            $loja->produtos()->saveMany(Produto::factory(5)->make());
        });
    }
}
