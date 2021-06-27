<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class projectController extends Controller
{
    public function Index(){
        return view("projects.index");
    }

    public function Create(){
        return view("projects.create");
    }

    public function Show($project){
        return view("projects.show", compact('project'));
    }
}
