<div class="p-4">
  
    <!-- Barra de identificacion y busqueda -->
    <div class="navbar bg-base-100">
        <div class="flex-1">
            <p class="normal-case text-xl">
              Roles
            </p>
        </div>
        <div class="flex-none gap-2">
          <div class="form-control">
            <input wire:model="buscar" type="text" placeholder="Buscar" class="input input-bordered w-24 md:w-auto" />
          </div>
          <div class="navbar-end">
            <button class="btn btn-primary">Button</button>
          </div>
        </div>
    </div>
    <!-- /Barra de identificacion y busqueda -->

    <!-- Tabla de roles -->
    <div class="overflow-x-auto mt-8">
        <table class="table">
          <!-- head -->
          <thead>
            <tr>
              <th>ID</th>
              <th>Nombre del Rol</th>
              <th>Fecha de Creación</th>
              <th>Última Modificación</th>
              <th>Opciones</th>
            </tr>
          </thead>
          <tbody>
            <!-- row 1 -->
            @foreach ($roles as $role )
                <tr>
                    <th>{{$role->id}}</th>
                    <td>{{$role->name}}</td>
                    <td>{{$role->created_at}}</td>
                    <td>{{$role->updated_at}}</td>
                    <td>
                      <button class="btn btn-circle btn-outline">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                      </button>    
                      <button class="btn btn-circle btn-outline">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                        </svg>
                      </button>                  
                      <button class="btn btn-circle btn-outline">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                      </button>
                    </td>
                </tr>                
            @endforeach   
          </tbody>
        </table>
        <div class="mt-4">
          {{ $roles->links() }}
        </div>       
    </div>
    <!-- /Tabla de roles -->

    
</div>


