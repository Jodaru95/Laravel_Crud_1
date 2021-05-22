<x-plantilla>
    <x-slot name="titulo">Inicio</x-slot>
    <x-slot name="cabecera">Portal de Academia Format 4 U</x-slot>
    <x-errores />
    <form name="ff" method="POST" action="{{route('asignaturas.store')}}" class="p-4 bg-secondary text-light mt-2">
        @csrf 
        <x-form-input name="nombre" label="Nombre"/>
        <x-form-input name="descripcion" label="Descripción"/>
        <x-form-input name="creditos" label="Creditos"/>
        <x-form-select name="profesor_id" :options="$misProfesores" label="Profesor" />
        <div class="container mt-3">
            <button type="submit" class="btn btn-info"><i class="fas fa-save"></i> Enviar</button>
            <button type="reset" class="btn btn-warning ml-3"><i class="fas fa-broom"></i> Limpiar</button>
            <a class="btn btn-primary ml-3" href="{{route('asignaturas.index')}}"><i class="fas fa-backward"></i> Volver</a>
        </div>
    </form>
</x-plantilla>