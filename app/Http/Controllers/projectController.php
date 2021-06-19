<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class projectController extends Controller
{
    public function Index(){
        return "Proyectos";
    }

    public function Create(){
        return "Aquí se crean un proyecto";
    }

    public function Show($project){
        return "Proyecto: $project";
    }
}
