<?php

namespace App\Http\Livewire\Administrador;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class Usuarios extends Component
{
    use WithPagination;    
    
    //seccion de busqueda
    public $buscar;    

    protected $queryString = [
        'buscar' => ['except' => '']
    ];

    public function render()
    {    
        //listar los usuarios y consultar por nombre y correo
        $usuarios = User::where('name', 'like', '%'.$this->buscar . '%')  //buscar por nombre de usuario
                      ->orWhere('email', 'like', '%'.$this->buscar . '%') //buscar por correo de usuario
                      ->orderBy('id','desc') //ordenar de forma decendente
                      ->paginate(8); //paginacion
        
        $roles = Role::all();

        return view('livewire.administrador.usuarios',[
            'usuarios' => $usuarios,
            'roles' => $roles
        ]);
    }
}
