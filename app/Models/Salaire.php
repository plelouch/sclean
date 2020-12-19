<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salaire extends Model
{
    use HasFactory;

    protected $fillable = [
        "base", "primeA", "primeR", "retenues", "cnss", "avancePers",
        "TCS", "Acompte", "professeur_id"
    ];
}
