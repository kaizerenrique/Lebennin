<?php

namespace App\Http\Livewire\Seccion;

use Livewire\Component;
use App\Traits\Albiononline\Lebennin;

class Alianza extends Component
{
    use Lebennin;

    public function render()
    {
        return view('livewire.seccion.alianza');
    }
}
