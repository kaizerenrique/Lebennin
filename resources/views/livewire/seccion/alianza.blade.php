<div class="p-4">

    <!-- Barra de identificacion y busqueda -->
    <div class="navbar bg-base-100">
        <div class="flex-1">
            <p class="normal-case text-xl">
                {{ $lebennin->AllianceName }}
            </p>
        </div>
    </div>
    <!-- /Barra de identificacion y busqueda -->

    <!-- Tabla de roles -->
    <div class="overflow-x-auto mt-8">
        <div class="mt-10 mx-auto grid max-w-6xl  grid-cols-1 gap-6 p-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
            <!-- row 1 -->
            @foreach ($lebennin->Guilds as $Guild)
                <article
                    class="rounded-xl bg-white p-3 shadow-lg hover:shadow-xl hover:transform hover:scale-105 duration-300 relative">
                    <div class="relative flex items-end overflow-hidden rounded-xl max-h-60 object-contain">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRJv6x2gGZGYRFeB9ce6Dem8x00_ER-K4MIiqUcIibb29zhatjm_2Xv0wzjhGCRnMJ3u-c&usqp=CAU" alt="Hotel Photo" />
                    </div>
                    <div class="mt-1 p-2">
                        <h2 class="text-slate-700">{{ $Guild->Name }}</h2> 
                </article>
            @endforeach

        </div>
    </div>
    <!-- /Tabla de roles -->

</div>
