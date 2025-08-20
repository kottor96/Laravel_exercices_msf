<?php

namespace App\Http\Controllers;

use App\Models\Stagiaire;
use Illuminate\Http\Request;

class StagiaireController extends Controller
{
    public function index(){
        $stagiaires = Stagiaire::all();
        return view('stagiaire',compact('stagiaires'));
    }
    public function destroy_stagiaire($id){
        Stagiaire::where('id',$id)->delete();
        return redirect('/stagiaire');
    }
    public function form_stagiaire(){
        return view('form_stagiaire');
    }
    public function store_stagiare(Request $request){
        $stagiaire = new Stagiaire();
        $stagiaire->nom = $request->nom;
        $stagiaire->prenom = $request->prenom;
        $stagiaire->age = $request->age;
        if ($request->hasFile('img')){
            $image = $request->file('img');
            $nomfichier = time().'_'.$image->getClientOriginalName();
            $path = $request->file('img')->storeAs('stagaire',$nomfichier,'public');
            $stagiaire->img = $path;
            $stagiaire->save();
        }
        return redirect('/stagiaire');
    }
}
