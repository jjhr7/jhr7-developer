@extends('layouts.plantilla')

@section('title','Proyectos')

@section('content')
    <h1>Bienvenido a Proyectos</h1>
    <a href="{{route('proyectos.create')}}">Crear proyecto</a>
    <ul>
        @foreach($project  as $project1)
            <li>
                <a href="{{route('proyectos.show',$project1->id)}}">{{$project1->name}}</a>
            </li>
        @endforeach
    </ul>
    {{$project->links()}}
@endsection
