<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scolarite extends Model
{
    use HasFactory;

    protected $fillable = [
        "mtTotal", "mtPaye", "eleve_id"
    ];

    public function student()
    {
        return $this->belongsTo('App\Models\Eleve');
    }
}
