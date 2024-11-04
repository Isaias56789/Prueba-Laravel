<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\catcontroller;
use App\Http\Controllers\dogcontroller;
use App\Http\Controllers\cowcontroller;
use App\Models\Computer;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ariel', function () {
    return view('miprimeravista');
});
Route::get('/gatitos', function () {
    return view('migatito');
});
Route::get('/vaca', function () {
    return view('mivaca');
});
Route::get('/perro', function () {
    return view('miperro');
});

Route::get('/gatocontrolador', [catcontroller::class, 'index']);
Route::get('/perrocontrolador', [dogcontroller::class, 'index']);
Route::get('/vacacontrolador', [cowcontroller::class, 'index']);

Route::get('/insertar', function () {
    $computer = new Computer();
    $computer->model = 'Demo Model';
    $computer->mark = 'Demo Mark';
    $computer->size = 14;
    $computer->published_at = now();
    $computer->is_active = true;
    $computer->save();

    return 'Registro agregado exitosamente';

   
  
    
});

Route::get('/fecha', function () {

   
$computer = Computer::find(1);
//return $computer->published_at;


//SE ESTABLECE UN FORMATO PARA EL DESPLIEGUE DE FECHA

$computer = Computer::find(1);

//EJEMPLO 1 - despliega la fecha en el formato que le indiquemos
//return $computer->published_at->format('d-m-Y');
//EJEMPLO 2 - despliega cuanto tiempo pasó despues de publicado
return $computer->published_at->diffForHumans();

//AHORA NO DARÁ RESULTADO PORQUE LAS ENTRADAS DE format Y DE diffForHumans DEBEN 
//DE SER VALORES TIMESTAMP
});


