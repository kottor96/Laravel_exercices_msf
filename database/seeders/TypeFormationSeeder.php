<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TypeFormation;

class TypeFormationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TypeFormation::create([
            'nom'=>'longue'
        ]);
        TypeFormation::create([
            'nom'=>'courte'
        ]);
        TypeFormation::create([
            'nom'=>'distanciel'
        ]);
        TypeFormation::create([
            'nom'=>'altenance'
        ]);
        TypeFormation::create([
            'nom'=>'stage'
        ]);
        TypeFormation::create([
            'nom'=>'larbin'
        ]);
        TypeFormation::create([
            'nom'=>'Cagatay'
        ]);
        TypeFormation::create([
            'nom'=>'moustafor'
        ]);
        TypeFormation::create([
            'nom'=>'Arthur'
        ]);
        TypeFormation::create([
            'nom'=>'Ryan'
        ]);
    }
}
