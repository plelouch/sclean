<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MatiereController extends Controller
{
    public function index()
    {
        return view("matiere.index");
    }

    public function new()
    {
        return view("matiere.new");
    }
}
