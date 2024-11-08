<?php

namespace Database\Seeders;

use App\Models\Students;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        Students::create([
            'name' => 'Sehzade',
            'age' => '17',
            'class' => '11 RPL',
            'address' => 'Jl. Soedirman'
        ]);
    }
}
