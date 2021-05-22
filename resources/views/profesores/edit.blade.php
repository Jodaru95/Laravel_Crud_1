<x-plantilla>
    <x-slot name="titulo">Inicio</x-slot>
    <x-slot name="cabecera">Portal de Academia Format 4 U</x-slot>
    <x-errores />
    <form name="ff" method="POST" action="{{route('profesores.update',$profesore)}}" class="p-4 bg-secondary text-light mt-2">
        @csrf 
        @method('PUT')
        @bind($profesore)
        <x-form-input name="nombre" label="Nombre"/>
        <x-form-input name="apellidos" label="Apellidos"/>
        <x-form-input name="localidad" label="Localidad"/>
        <x-form-input name="email" label="Email" type="mail"/>
        
        <button type="submit" class="btn btn-info mt-2"><i class="fas fa-edit"></i> Actualizar</button>
        <button class="btn btn-primary ml-3 mt-2" href="{{route('profesores.index')}}"><i class="fas fa-backward"></i> Volver</button>
    </form>
</x-plantilla>