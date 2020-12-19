<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payement extends Model
{
    use HasFactory;

    protected $fillable = [
        "libelle", "mtPay", "datePay", "eleve_id"
    ];

    public function student()
    {
        return $this->belongsTo('App\Models\Eleve');
    }
}
