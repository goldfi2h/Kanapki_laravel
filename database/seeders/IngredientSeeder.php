<?php

namespace Database\Seeders;

use App\Models\Ingredient;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ingredient::create([
            'name' => 'Ogórek',
            'quantity' => 1
        ]);

        Ingredient::create([
            'name' => 'Ser',
            'quantity' => 3
        ]);

    }
}
