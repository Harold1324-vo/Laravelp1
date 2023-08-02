<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class LoginController extends Controller
{
    //Método para mostrar página principal
    public function index(){
        return view('cursos.index');
    }

    //Método para crear
    public function create(){
        return view('cursos.create');
    } 

    //Método para mostrar un módulo en especial
    public function show($curso){
        return view('cursos.show', compact('curso'));

        /* 
            La variable $curso se la pasamos a la vista mediante un array. Esto también se puede con el método
            compact();
                return view('cursos.show', ['curso' => $curso]);
         */
    }
}
