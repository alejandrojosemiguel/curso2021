@extends('layouts.template')
@section('title','Cursos|Show')
@section('content')

<a href="{{route('cursos.edit',$curso)}}">Editar curso</a>

<h1>Bienvenido a la página del curso de {{$curso->name}}</h1>
<h4>{{$curso->category}}</h4>
<h4>{{$curso->description}}</h4>
<h4>{{$curso->id}}</h4>

<a href="{{ URL::previous() }}">Volver</a>

@endsection

