<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pageController;
use App\Http\Controllers\BatimentController;
use App\Http\Controllers\EleveController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\TypeFormationController;

Route::get('/',[pageController::class,'home']);
Route::get('/formation',[FormationController::class,'index']);
Route::get('/eleve',[EleveController::class,'index']);
Route::get('/batiment',[BatimentController::class,'index']);
Route::get('/type',[TypeFormationController::class,'index']);
