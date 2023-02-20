<?php

namespace Database\Seeders;

use App\Models\Sandwitch;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SandwitchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        Sandwitch::create([
            'name' => 'Kanapka 1',
            'bread_id' => 1,
            'price' => 19.99
        ]);

        Sandwitch::create([
            'name' => 'Kanapka 2',
            'bread_id' => 2,
            'price' => 12.99
        ]);

        Sandwitch::create([
            'name' => 'Kanapka 3',
            'bread_id' => 2,
            'price' => 7.99
        ]);
    }
}
