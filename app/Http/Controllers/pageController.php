<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Batiment;
use App\Models\Eleve;
use App\Models\Formation;
use App\Models\TypeFormation;

class pageController extends Controller
{
    public function home(){
        $formations=Formation::all();
        $batiments=Batiment::all();
        $typeFormations=TypeFormation::all();
        $eleves=Eleve::all();
        return view('welcome',compact('formations','batiments','eleves','typeFormations'));
    }
}
