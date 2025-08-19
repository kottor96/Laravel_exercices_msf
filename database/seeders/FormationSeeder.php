<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Formation;

class FormationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Formation::create([
            'nom' => 'fullstack',
            'description' => 'une formation front et back' 
        ]);
        Formation::create([
            'nom' => 'devenir Riche avec Cagatay',
            'description' => 'comment etre pauvre en 24h' 
        ]);
        Formation::create([
            'nom' => 'front',
            'description' => 'juste du front' 
        ]);
        Formation::create([
            'nom' => 'fromage',
            'description' => 'faire du fromage' 
        ]);
        Formation::create([
            'nom' => 'arnaque',
            'description' => 'faire des arnaque en ligne' 
        ]);
        Formation::create([
            'nom' => 'back',
            'description' => 'juste du back' 
        ]);
    }
}
