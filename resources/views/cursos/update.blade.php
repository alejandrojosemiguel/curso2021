@extends('layouts.template')
@section('title','cursos create')
 
@section('content')
<h1>Bienvenido a la pagina actualizacion de cursos</h1>
<form action="{{route('cursos.update',$curso)}}" method="POST">
    
    @csrf

    @method('put')
 
    {{-- <label>
        ID:
        <input type="text" name="id" value="{{old('id',$curso->id)}}">
    </label>
    <br> --}}
    <label>
        Nombre:
        <input type="text" name="name" value="{{old('name',$curso->name)}}">
    </label>
    @error('name')
        <small>{{$message}}</small>
    @enderror
    <br>
    <label>
        category:
        <input type="text" name="category" value="{{old('category',$curso->category)}}">
    </label>
    @error('category')
        <small>{{$message}}</small>
    @enderror
    <br>
    <label>
        Descripcion:
        <textarea name="description">{{old('description',$curso->description)}}</textarea>
    </label>
    @error('description')
        <small>{{$message}}</small>
    @enderror
    <br><button type="submit">Actualizar</button>
</form>
@endsection
