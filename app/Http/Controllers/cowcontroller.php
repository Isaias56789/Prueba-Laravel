<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cowcontroller extends Controller
{
    public function index(){
        //return "Este es mi primer controlador!!";

        $nombre = "Ariel";
        $apellido = "Cahum";

        return view('mivaca')
        ->with('minombre' , $nombre)
        ->with('miapellido' , $apellido);
    }
}