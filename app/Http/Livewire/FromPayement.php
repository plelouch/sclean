<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FromPayement extends Component
{
    public $confirmItemAdd = false;

    protected $listeners = ['modalAddPayement'];

    public function modalAddPayement()
    {
        $this->confirmItemAdd = true;
    }

    public function closeModal()
    {
        $this->confirmItemAdd = false;
    }

    public function render()
    {
        return view('livewire.from-payement');
    }
}
