<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parcour extends Model
{
    use HasFactory;

    protected $fillable = [
        "libelleParcours", "codeParcours",
        "dateCreation", "montantScolarite", "professeur_id"
    ];

    public function professeur()
    {
        return $this->belongsTo('App\Models\Professeur');
    }
}
