<x-app-layout>
    <div class="py-12">
        <!-- Menu lateral -->
        <livewire:componentes.menulateral/>
        <!-- / Menu lateral -->

        <div class="h-full ml-14 mt-14 mb-10 md:ml-64">
            <div class="bg-white mx-8 overflow-hidden shadow-xl rounded-lg sm:rounded-lg">
                <livewire:administrador.roleypermiso/>
            </div>            
        </div>
    </div>
</x-app-layout>