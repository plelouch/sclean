<?php

namespace App\Http\Livewire;

use App\Models\Professeur;
use Livewire\Component;

class FormProfessor extends Component
{
    public $form = [
        "nom" => '', "prenoms" => '', "contact" => '',
        "addr" => '', "diplome" => '', "matricule" => ''
    ];

    public function store()
    {
        $this->validate([
            "form.nom" => 'required',
            "form.prenoms" => 'required',
            "form.contact" => 'required',
            "form.addr" => 'required',
            "form.diplome" => 'required',
        ]);

        $this->form['matricule'] = substr(strtoupper(uniqid('', true)), 0,8);

        Professeur::create($this->form);

        return redirect()->route('profs_index');
    }

    public function render()
    {
        return view('livewire.form-professor');
    }
}
