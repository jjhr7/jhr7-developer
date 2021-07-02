<?php

namespace Database\Seeders;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Seeder con datos personalizados
        $project = new Project();

        $project->name = "Portfolio personal";
        $project->description = "Web desarrollada para subir todos los proyectos que voy haciendo";
        $project->category = "Desarrollo web";

        $project->save();

        $project1 = new Project();

        $project1->name = "Videojuego";
        $project1->description = "Proyecto videojuego";
        $project1->category = "Unity";

        $project1->save();

        $project2 = new Project();

        $project2->name = "Marihuas";
        $project2->description = "Web infinity crop";
        $project2->category = "Desarrollo web";

        $project2->save();
    }
}
