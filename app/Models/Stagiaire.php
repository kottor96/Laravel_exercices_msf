<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stagiaire extends Model
{
    protected $filled = ['nom', 'prenom', 'age', 'img'];
}
