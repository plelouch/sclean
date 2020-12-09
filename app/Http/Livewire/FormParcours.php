<?php

namespace App\Http\Livewire;

use App\Models\Parcour;
use App\Models\Professeur;
use Livewire\Component;

class FormParcours extends Component
{
    public $form = [
        "libelleParcours" => '',
        "codeParcours" => '',
        "dateCreation" => '', "montantScolarite" => '', "professeur_id" => ''
    ];

    public $code = ["A","B","C","D"];

    public $professors;

    public function updated($field)
    {
        $this->validateOnly($field, [
            "form.libelleParcours" => 'required',
            "form.montantScolarite" => 'required',
            "form.professeur_id" => "required"
        ]);
    }

    public function store()
    {
        $this->validate([
            "form.libelleParcours" => 'required',
            "form.montantScolarite" => 'required',
            "form.professeur_id" => "required"
        ]);

        $this->form['dateCreation'] = new \DateTime();
        $parcour = Parcour::all();

        if ($parcour->count() !== 0){

            for ($i = 0; $i < $parcour->count(); $i++){
                if ($parcour[$i]['libelleParcours'] === $this->form['libelleParcours'] && $parcour[$i]['codeParcours'] === "A")
                    $this->form['codeParcours'] = $this->code[1];
                elseif ($parcour[$i]['libelleParcours'] === $this->form['libelleParcours'] && $parcour[$i]['codeParcours'] === "B" || $parcour[$i]['codeParcours'] === "A")
                    $this->form['codeParcours'] = $this->code[2];
                elseif ($parcour[$i]['libelleParcours'] === $this->form['libelleParcours'] && $parcour[$i]['codeParcours'] === "C" || $parcour[$i]['codeParcours'] === "B" || $parcour[$i]['codeParcours'] === "A")
                    $this->form['codeParcours'] = $this->code[3];
            }
        }else{
            $this->form['codeParcours'] = $this->code[0];
        }

        Parcour::create($this->form);

        return redirect()->route('parcour_index');
    }

    public function render()
    {
        $this->professors = Professeur::all();
        return view('livewire.form-parcours', [
            'professors' => $this->professors
        ]);
    }
}
