<?php

namespace App\Http\Livewire;

use App\Models\Professeur;
use Livewire\Component;

class Professor extends Component
{
    public $professors;

    public function delete($idProfessor)
    {
        $professor = Professeur::find($idProfessor);
        $professor->delete();
    }

    public function render()
    {
        $this->professors = Professeur::all();
        return view('livewire.professor', [
            'professors' => $this->professors
        ]);
    }
}
