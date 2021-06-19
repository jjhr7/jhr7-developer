<?php

use App\Http\Controllers\projectController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


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
/*Para versiones de Laravel inferiores a la 8 - se asigna un controlador a una ruta de esta forma y hya que descomentar la linea 31 del archivo Providers/RouteServiceProvider.php
 * Route::get('proyectos', "projectController@Index" );*/

Route::get('/', HomeController::class);

Route::get('proyectos', [projectController::class, "Index"] );

Route::get('proyectos/create', [projectController::class, "Create"]);


Route::get('proyectos/{proyecto}',[projectController::class, "Show"] );




