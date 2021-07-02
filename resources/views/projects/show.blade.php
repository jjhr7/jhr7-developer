@extends('layouts.plantilla')

@section('title','Proyecto '.$project)

@section('content')
    <h1>Bienvenido al proyecto {{$project->name}}</h1>
    <a href="{{route('proyectos.index')}}">Volver a proyectos</a>
    <p><strong>Categoría: {{$project->category}}</strong></p>
    <p>{{$project->description}}</p>
@endsection
