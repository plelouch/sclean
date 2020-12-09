<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ParcourController extends Controller
{
    public function index()
    {
        return view("parcours.index");
    }

    public function new()
    {
        return view("parcours.new");
    }
}
