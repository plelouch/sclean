<?php

namespace App\Http\Livewire;

use App\Models\Parcour;
use Livewire\Component;

class Parcours extends Component
{
    public $parcours;

    public function delete($idParcour)
    {
        $parcour = Parcour::find($idParcour);
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
