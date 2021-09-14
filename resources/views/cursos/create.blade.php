@extends('layouts.template')
@section('title','Cursos|Create')
@section('content')

<h1>En esta pagina podras crear un nuevo curso</h1>

<form action="{{route('cursos.store')}}" method="POST">

    @csrf

    <label>
        Nombre:
        <input type="text" name="name" value="{{old('name')}}">
        @error('name')
            <small>{{$message}}</small>
        @enderror
    </label>
    <br>
    <label>
        Categoria:
        <input type="text" name="category" value="{{old('category')}}">
        @error('category')
            <small>{{$message}}</small>
        @enderror
    </label>
    <br>
    <label>
        Descripcion:
        <textarea name="description">{{old('description')}}</textarea>
        @error('description')
            <small>{{$message}}</small>
        @enderror
    </label>
    <br><button type="submit">Agregar</button>
</form>

@endsection