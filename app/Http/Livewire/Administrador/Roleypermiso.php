<?php

namespace App\Http\Livewire\Administrador;

use Livewire\Component;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Livewire\WithPagination;

class Roleypermiso extends Component
{

    use WithPagination;
    
    //seccion de busqueda
    public $buscar;    

    protected $queryString = [
        'buscar' => ['except' => '']
    ];

    public function render()
    {
        $roles = Role::all();
        
        $roles = Role::where('name', 'like', '%'.$this->buscar . '%')  //buscar por nombre de rol
                      ->paginate(10); //paginacion
     
        
        return view('livewire.administrador.roleypermiso',[
            'roles' => $roles,
        ]);
    }

    /**
     * Corrige la numeracion de la tabla al realizar 
     * una busqueda
     */
    public function updatingBuscar()
    {
        $this->resetPage();
    }
}
