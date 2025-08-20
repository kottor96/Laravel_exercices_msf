<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pageController;
use App\Http\Controllers\BatimentController;
use App\Http\Controllers\EleveController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\TypeFormationController;
use App\Http\Controllers\StagiaireController;

Route::get('/',[pageController::class,'home']);
Route::get('/formation',[FormationController::class,'index']);
Route::get('/eleve',[EleveController::class,'index']);
Route::get('/batiment',[BatimentController::class,'index']);
Route::get('/type',[TypeFormationController::class,'index']);

Route::get('/stagiaire',[StagiaireController::class,'index']);
Route::get('/stagiaire/form',[StagiaireController::class,'form_stagiaire']);
Route::post('/stagiaire/valider',[StagiaireController::class,'store_stagiare']);
Route::delete('/stagiaire/destroy',[StagiaireController::class],'destroy_stagiaire')->name('destroy_stagiaire');
