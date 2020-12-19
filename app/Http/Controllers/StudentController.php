<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        return view("students.index");
    }

    public function new()
    {
        return view("students.new");
    }
}
