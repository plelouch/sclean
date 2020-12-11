<?php

namespace App\Http\Livewire;

use App\Models\Eleve;
use Livewire\Component;

class Student extends Component
{
    public $students;

    public $confirmItemAdd = false;

    public function delete($idStudent)
    {
        $student = Eleve::find($idStudent);
        $student->delete();
    }

    public function addPayement(){
        $this->emit('modalAddPayement');
    }

    public function render()
    {
        $this->students = Eleve::all();
        return view('livewire.student', [
            'students' => $this->students
        ]);
    }
}
