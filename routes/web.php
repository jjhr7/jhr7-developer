<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('proyectos', function (){
    return "Proyectos";
});


Route::get('proyectos/create', function (){
    return "Aquí se crean un proyecto";
});




/*Route::get('proyectos/{proyecto}', function ($project){
    return "Proyecto: $project";
});*/

Route::get('proyectos/{proyectoName}/{categoria?}', function ($proyectoName, $categoria = null){

    if($categoria == null){
        return "Proyecto: $proyectoName";
    }else{
        return "Bienvenido al proyecto $proyectoName, de la cateogria: $categoria";
    }

});


