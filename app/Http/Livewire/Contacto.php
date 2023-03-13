<?php

namespace App\Http\Livewire;

use App\Models\Contacto as ContactoModel;
use Livewire\Component;

class Contacto extends Component
{

    public function showContactanos()
    {
        return view('livewire.contacto');
    }

    public function render()
    {
        return view('livewire.contacto');
    }
}
