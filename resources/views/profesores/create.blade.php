<x-plantilla>
    <x-slot name="titulo">Inicio</x-slot>
    <x-slot name="cabecera">Portal de Tiendas del Sur</x-slot>
    <x-errores />
    <form name="ff" method="POST" action="{{route('profesores.store')}}" class="p-4 bg-secondary text-light mt-2">
        @csrf 
        <x-form-input name="nombre" label="Nombre"/>
        <x-form-input name="apellidos" label="Apellidos"/>
        <x-form-input name="localidad" label="Localidad"/>
        <x-form-input name="email" label="Email" type="mail"/>
        <div class="container mt-3">
            <button type="submit" class="btn btn-info"><i class="fas fa-save"></i> Enviar</button>
            <button type="reset" class="btn btn-warning ml-3"><i class="fas fa-broom"></i> Limpiar</button>
            <a class="btn btn-primary ml-3" href="{{route('profesores.index')}}"><i class="fas fa-backward"></i> Volver</a>
        </div>
    </form>
</x-plantilla>