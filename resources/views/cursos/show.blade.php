@extends('layouts.template')
@section('title','Cursos|Show')
@section('content')
<a href="{{route('cursos.edit',$curso)}}">Editar curso</a>

<h1>Bienvenido a la página del curso de:</h1>
<h4>{{$curso->name}}</h4>
<h4>{{$curso->category}}</h4>
<h4>{{$curso->description}}</h4>
<h4>{{$curso->id}}</h4>

<br>
<br>
<form action="{{route('cursos.destroy',$curso)}}" method="post">
    @csrf
    @method('delete')
    <button type="submit">Eliminar curso</button>
</form>
<br>
<br>

<a href="{{ URL::previous() }}">Volver</a>

@endsection

