<x-plantilla>
    <x-slot name="titulo">Gestión</x-slot>
    <x-slot name="cabecera">Gestión del profesorado de la academia</x-slot>
    <x-mensajes/>
    <a href="{{route('profesores.create')}}" class="btn btn-success"><i class="fas fa-plus"></i> Crear Profesor</a>
    <table class="table table-dark table-striped mt-3">
        <thead>
            <tr>
            <th scope="col">Detalles</th>
            <th scope="col">Nombre</th>
            <th scope="col">Localidad</th>
            <th scope="col" colspan=2 class="text-center">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($profesores as $item)
                <tr>
                    <th scope="row">
                        <a href="{{route('profesores.show', $item)}}" class="btn btn-info"><i class="fas fa-info"></i> Detalles</a>
                    </th>
                    <td>{{$item->apellidos.", ".$item->nombre}}</td>
                    <td>{{$item->localidad}}</td>
                    <td class="text-center">
                        <a href="{{route('profesores.edit', $item)}}" class="btn btn-warning"><i class="fas fa-edit"></i> Editar</a>
                    </td>
                    <td class="text-center">
                        <form name="sd" method="POST" action="{{route('profesores.destroy', $item)}}">
                            @csrf 
                            @method("DELETE")
                            <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Borrar</button>
                        </form>
                    </td>
                </tr>
            @endforeach   
        </tbody>
    </table>
    <div class="mt-2">
        {{$profesores->links()}}
    </div>
</x-plantilla>