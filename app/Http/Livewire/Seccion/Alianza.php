<?php

namespace App\Http\Livewire\Seccion;

use Livewire\Component;
use App\Traits\Albiononline\Lebennin;

class Alianza extends Component
{
    use Lebennin;

    public function render()
    {
        $alianza = $this->alianza();        

        return view('livewire.seccion.alianza',[
            'lebennin' => $alianza
        ]);
    }
}
