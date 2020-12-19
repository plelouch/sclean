<?php

namespace App\Http\Livewire;

use App\Models\Echeancier;
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

    public $fields = [];

    public function addField()
    {
        $this->fields[] = count($this->fields) + 1;
    }

    public function removeField($key)
    {
        unset($this->fields[$key]);
    }

    public $code = ["A","B","C","D"];

    public $professors;

    public function updated($field)
    {
        $this->validateOnly($field, [
            "form.libelleParcours" => 'required',
            "form.montantScolarite" => 'required',
            "form.professeur_id" => "required",
        ]);
    }

    public function store()
    {
        $this->validate([
            "form.libelleParcours" => 'required',
            "form.montantScolarite" => 'required',
            "form.professeur_id" => "required",
        ]);

        $this->form['dateCreation'] = new \DateTime();
        $parcour = Parcour::all();

        if ($parcour->count() !== 0){
            for ($i = 0; $i < $parcour->count(); $i++){
                if ($parcour[$i]['libelleParcours'] === $this->form['libelleParcours']){
                    switch ($parcour[$i]['codeParcours']){
                        case "A":
                            $this->form['codeParcours'] = $this->code[1];
                            break;
                        case "B":
                            $this->form['codeParcours'] = $this->code[2];
                            break;
                        default:
                            $this->form['codeParcours'] = $this->code[3];
                            break;
                    }
                    continue;
                }else{
                    $this->form['codeParcours'] = $this->code[0];
                }
            }
        }else{
            $this->form['codeParcours'] = $this->code[0];
        }
        $sum = 0;

        if ($this->fields){
            foreach ($this->fields as $field){
                $sum += $field['montant'];
            }
            if ($sum > $this->form['montantScolarite']){
                return $this->addError('montant', "La somme définis par l'écheancier est supérieur au montant de la scolarité");
            }elseif ($sum < $this->form['montantScolarite']){
                return $this->addError('montant', "La somme définis par l'écheancier est inférieur au montant de la scolarité");
            }
        }

        $newParcour = Parcour::create($this->form);

        $professor = Professeur::find($newParcour->professeur_id);
        $professor->isDispo = false;
        $professor->save();

        if ($this->fields){
            foreach ($this->fields as $field){
                $newParcour->echeancier()->save(new Echeancier([
                    "mois" => $field['mois'],
                    'montant' => $field['montant']
                ]));
            }
        }

        return redirect()->route('parcour_index');
    }

    public function render()
    {
        $this->professors = Professeur::all()->where('isDispo', true);
        return view('livewire.form-parcours', [
            'professors' => $this->professors
        ]);
    }
}
