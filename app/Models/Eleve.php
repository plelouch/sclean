<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eleve extends Model
{
    use HasFactory;

    protected $fillable = [
        "nomEleve", "prenomsEleve", "dateNaissEleve", "sexe",
        "lieuNaiss", "tuteur", "contactTuteur", "numMatricul", "ecoleProv",
        "photo", "niveauEleve", "dateInscription", "parcour_id"
    ];

    public function parcour()
    {
        return $this->belongsTo('App\Models\Parcour');
    }

    public function payement()
    {
        return $this->hasMany('App\Models\Payement');
    }

    public function scolarite()
    {
        return $this->hasMany('App\Models\Scolarite');
    }
}
