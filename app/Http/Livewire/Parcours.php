<?php

namespace App\Http\Livewire;

use App\Models\Parcour;
use App\Models\Professeur;
use Livewire\Component;

class Parcours extends Component
{
    public $parcours;

    public function delete($idParcour)
    {
        $parcour = Parcour::find($idParcour);

        $professor = Professeur::find($parcour->professeur_id);
        $professor->isDispo = true;
        $professor->save();

        $parcour->delete();
    }

    public function render()
    {
        $this->parcours = Parcour::all();
        return view('livewire.parcours', [
            'parcours' => $this->parcours
        ]);
    }
}
