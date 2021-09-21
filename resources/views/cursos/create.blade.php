@extends('layouts.template')
@section('title','Cursos|Create')
@section('content')

<h2 class="font-medium text-green-900 truncate my-4">En esta pagina podras crear un nuevo curso</h2>
 
<form class="w-full max-w-lg" action="{{route('cursos.store')}}" method="POST">
 
    @csrf
 
    <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="name">
                Nombre:
            </label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-blue-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="name" type="text" name="name" value="{{old('name')}}" placeholder="Nombre del curso">
            @error('name')
                <small class="text-red-500 text-xs italic">{{$message}}</small>
            @enderror
        </div>
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="category">
                Categoría:
            </label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-blue-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="category" type="text" name="category" value="{{old('category')}}" placeholder="Categoría">
            @error('category')
                <small class="text-red-500 text-xs italic">{{$message}}</small>
            @enderror
        </div>
    </div>
    <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3">    
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="description">
                Descripcion:
            </label>
            <textarea class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" name="description">{{old('description')}}</textarea>
            @error('description')
                <small class="text-red-500 text-xs italic">{{$message}}</small>
            @enderror
        </div>
    </div>
    <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3">    
            <button class="shadow bg-blue-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit">
                Agregar
            </button>
        </div>
    </div>
</form>
 
@endsection
