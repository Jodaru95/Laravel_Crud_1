<x-plantilla>
    <x-slot name="titulo">Gestion</x-slot>
    <x-slot name="cabecera">Detalles Profesor ({{$profesore->id}})</x-slot>
    <div class="card m-auto" style="width: 34rem;">
        <div class="card-body">
            <h4 class="card-title">{{$profesore->nombre}}</h4>
            <h6 class="card-subtitle mb-2 text-muted">{{$profesore->apellidos}}</h6>
            <h6 class="card-subtitle mb-2 text-muted">({{$profesore->localidad}})</h6>
            <p class="card-text"><b>Email: </b>{{$profesore->email}}</p>
            <p class="card-text">
                <b>Asignaturas: </b>
                <ul>
                <!-- Le pasamos al foreach el metodo que teniamos en el modelo Profesor para sacar las asignaturas -->
                    @foreach($profesore->asignaturas as $item)
                        <li><a href="{{route('asignaturas.show',$item)}}">{{$item->nombre}}</a></li>
                    @endforeach
                </ul>
            </p>
            <div class="mt-2">
                <button class="btn btn-primary ml-3 mt-2" onclick="window.history.back();"><i class="fas fa-backward"></i> Volver</button>
            </div>
        </div>
    </div> 
</x-plantilla>