<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Echeancier extends Model
{
    use HasFactory;

    protected $fillable = [
        "mois", 'montant', 'parcour_id'
    ];

    public function parcour()
    {
        return $this->belongsTo('App\Models\Parcour');
    }
}
