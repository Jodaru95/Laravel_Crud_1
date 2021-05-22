<x-plantilla>
    <x-slot name="titulo">Gestion</x-slot>
    <x-slot name="cabecera">Detalles Asignatura ({{$asignatura->id}})</x-slot>
    <div class="card m-auto" style="width: 34rem;">
        <div class="card-body">
            <h4 class="card-title">{{$asignatura->nombre}}</h4>
            <h6 class="card-subtitle mb-2 text-muted"><b>Créditos:</b> {{$asignatura->creditos}}</h6>
            <h6 class="card-subtitle mb-2 text-muted"><b>Impartida por:</b> <a href="{{route('profesores.show', $asignatura->profesor->id)}}">#{{$asignatura->profesor->nombre}}</a></h6>
            <p class="card-subtitle mb-2 text-muted"><b>Descripción: </b>{{$asignatura->descripcion}}</p>
            <div class="mt-2">
                <button class="btn btn-primary ml-3 mt-2" onclick="window.history.back();"><i class="fas fa-backward"></i> Volver</button>
            </div>
        </div>
    </div>
</x-plantilla>