<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class projectController extends Controller
{
    public function Index(){

        $project = Project::paginate();
        return view("projects.index", compact('project'));

    }

    public function Create(){
        return view("projects.create");
    }

    public function Show($id){

        $project = Project::find($id);
        return view("projects.show", compact('project'));
    }
}
