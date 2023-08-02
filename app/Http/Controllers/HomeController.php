<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //El método invoke administra solo una ruta
    public function __invoke(){
        //Método se dirige a resources -> views y rescarta el archivo especificado entre comillas
        return view('home');
    }
}
