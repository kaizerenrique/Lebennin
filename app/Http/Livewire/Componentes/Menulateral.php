<?php

namespace App\Http\Livewire\Componentes;

use Livewire\Component;
use App\Models\User;
use App\Traits\Albiononline\Lebennin;

class Menulateral extends Component
{
    use Lebennin;

    public function render()
    {
        $alianza = $this->alianza();
        $nombre = $alianza->AllianceName;
        $num = count($alianza->Guilds);        

        $users_count = User::count(); //total de usuarios registrados
        
        return view('livewire.componentes.menulateral',[
            'users_count' => $users_count,
            'nombre' => $nombre,
            'num' => $num
        ]);
    }
}
