@extends('layouts.template')
@section('title','Contactanos')
@section('content')
<h1>Dejanos un mensaje</h1>
 
<form action="{{route('contactanos.store')}}" method="POST">
    @csrf
    <label for="">
        Nombre: 
        <br>
        <input type="text" name="nombre">
        @error('nombre')
        <br><small>{{$message}}</small>
        @enderror        
    </label>
    <br>
    <label for="">
        Correo: 
        <br>
        <input type="text" name="correo">
        @error('correo')
        <br><small>{{$message}}</small>
        @enderror  
    </label>
    <br>
    <label for="">
        Mensaje: 
        <br>
        <textarea name="mensaje" id="" cols="" rows="4"></textarea>
        @error('mensaje')
        <br><small>{{$message}}</small>
        @enderror 
    </label>
    <br>
    <button type="submit">Enviar</button>
</form>
@if (session('info'))
    <script>
        alert('{{session('info')}}');
    </script>
@endif

@php
    $color1='red';
    $color2='yellow';
    $tipo='alert2';
@endphp


<div class="container mx-auto">

    <x-dynamic-component :component="$tipo" :color="$color1" class="mb-4"> 
        <x-slot name="title">Discovered Package:</x-slot>
        Package manifest generated successfully.
    </x-dynamic-component>

</div>


@endsection




