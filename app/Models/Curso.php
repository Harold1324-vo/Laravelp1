<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    /* Este modelo permite tratar a los registros como objetos, esto para crear nuevos objetos.
        El extender de Model nos permite crear el método create, update, deleate, etc 
        
        Convención: Curso -> cursos, User -> users.
        Esta convención hace que el modelo administre la tabla con su nombre en plural.

        el código: protected $variable = "nombreTabla"; hace que el modelo administre una tabla
        con un nombre diferente. User -> cursos
        
        */

    use HasFactory;
}
