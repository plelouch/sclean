<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professeur extends Model
{
    use HasFactory;

    protected $fillable = [
        "nom", "prenoms", "contact",
        "addr", "diplome", "matricule"
    ];

    public function parcour()
    {
        return $this->hasMany('App\Models\Parcour');
    }
}
