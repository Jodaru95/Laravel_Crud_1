<x-plantilla>
    <x-slot name="titulo">Inicio</x-slot>
    <x-slot name="cabecera">Editar Asignatura</x-slot>
    <x-errores />
    <form name="sd" method="POST" action="{{route('asignaturas.update', $asignatura)}}" class="p-4 bg-secondary text-light mt-2">
        @csrf 
        @method('PUT')
        @bind($asignatura)
        <x-form-input name="nombre" label="Nombre"/>
        <x-form-input name="creditos" label="Créditos"/>
        <x-form-input name="descripcion" label="Descripción"/>
        <x-form-select name="profesor_id" :options="$misProfesores" label="Profesor" />
        <div class="container mt-3">     
            <button type="submit" class="btn btn-info"><i class="fas fa-edit"></i> Actualizar</button>
            <button class="btn btn-primary ml-3" onclick="window.history.back();"><i class="fas fa-backward"></i> Volver</button>
        </div>
    </form>
</x-plantilla>