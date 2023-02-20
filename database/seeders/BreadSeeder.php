<?php

namespace Database\Seeders;

use App\Models\Bread;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BreadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        Bread::create([
            'name' => 'Białe'
        ]);

        Bread::create([
            'name' => 'Pełnoziarniste'
        ]);
    }
}
