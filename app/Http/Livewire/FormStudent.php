<?php

namespace App\Http\Livewire;

use App\Models\Eleve;
use App\Models\Parcour;
use App\Models\Scolarite;
use Livewire\Component;
use Livewire\WithFileUploads;

class FormStudent extends Component
{
    use WithFileUploads;

    public $parcours;

    public $form = [
        "nomEleve" => '', "prenomsEleve" => '', "dateNaissEleve" => '', "sexe" => '',
        "lieuNaiss" => '', "tuteur" => '', "contactTuteur" => '', "numMatricul" => '', "ecoleProv" => '',
        "photo" => '', "niveauEleve" => '', "dateInscription" => '', "parcour_id" => ''
    ];

    public function updated($field)
    {
        $this->validateOnly($field, [
            "form.nomEleve" => 'required', "form.prenomsEleve" => 'required',
            "form.dateNaissEleve" => 'required', "form.sexe" => 'required',
            "form.lieuNaiss" => 'required', "form.tuteur" => 'required',
            "form.contactTuteur" => 'required', "form.ecoleProv" => 'required',
            "form.photo" => 'required|image|max:2048', "form.niveauEleve" => 'required', "form.parcour_id" => 'required'
        ]);
    }

    public function store()
    {
        $this->validate([
            "form.nomEleve" => 'required', "form.prenomsEleve" => 'required',
            "form.dateNaissEleve" => 'required', "form.sexe" => 'required',
            "form.lieuNaiss" => 'required', "form.tuteur" => 'required',
            "form.contactTuteur" => 'required', "form.ecoleProv" => 'required',
            "form.photo" => 'required|image|max:2048', "form.niveauEleve" => 'required', "form.parcour_id" => 'required'
        ]);

        $filepath = $this->form['photo']->store('images', 'public');
        $this->form['numMatricul'] = substr(strtoupper(uniqid('', true)), 0,8);
        $this->form['dateInscription'] = new \DateTime();
        $this->form['photo'] = $filepath;

        $student = Eleve::create($this->form);

        $ecolage = $student->parcour->montantScolarite;

        $student->scolarite()->save(new Scolarite([
            "mtTotal" => $ecolage, "mtPaye" => 0, "debut" => new \DateTime(), "fin" => new \DateTime()
        ]));

        return redirect()->route('student_index');
    }

    public function render()
    {
        $this->parcours = Parcour::all();
        return view('livewire.form-student', [
            'parcours' => $this->parcours
        ]);
    }
}
