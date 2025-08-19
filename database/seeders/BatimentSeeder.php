<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Batiment;

class BatimentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Batiment::create([
            'nom'=>'molengeek',
            'description'=>"Molengeek est un espace innovant dédié à la technologie et à l'entrepreneuriat. Il offre un environnement collaboratif pour les développeurs, les start-ups et les passionnés de nouvelles technologies. L'endroit est conçu pour favoriser la créativité, l'apprentissage et le partage de connaissances à travers des ateliers, des événements et des espaces de coworking modernes."
        ]);
    }
}
