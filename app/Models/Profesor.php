<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    use HasFactory;
    protected $fillable=['nombre','apellidos','email','localidad'];

    //Indicamos que va a recibir varias asignaturas
    public function asignaturas(){
        //tiene muchas asignaturas
        return $this->hasMany(Asignatura::class);
    }

    public static function getArrayIdNombre(){
        //guardo las profesores ordenadas por nombre
        $profesores=Profesor::orderBy('nombre')->get();
        $miArray=[];
        foreach($profesores as $item){//recorro los profesores uno a uno
            $miArray[$item->id]=$item->nombre;//para cada profesor si el primer indice es 43 , le asocio el nombre del 43,etc...
        }
        return $miArray;//devuelvo el array
    }
}
