<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class catcontroller extends Controller
{
    public function index(){
        //return "Este es mi primer controlador!!";

        $nombre = "Ariel";
        $apellido = "Cahum";

        return view('migatito')
        ->with('minombre' , $nombre)
        ->with('miapellido' , $apellido);
    }
}