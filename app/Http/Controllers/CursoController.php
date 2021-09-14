<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Http\Requests\StoreCurso;

class CursoController extends Controller
{
    public function index(){

        $cursos = Curso::orderBy('id','desc')->paginate();
 
        return view('cursos.index',compact('cursos'));
    }

    public function show(Curso $curso){

        return view('cursos.show',compact('curso'));
    }

    public function create(){

        return view('cursos.create');

    }
    
    public function store(StoreCurso $request){

        $curso = Curso::create($request->all());

        return redirect()->route('cursos.index',$curso);

    }
    
    public function update(StoreCurso $request, Curso $curso){

        $curso->update($request->all());

        return redirect()->route('cursos.index');

    }

    public function edit(Curso $curso){

        return view('cursos.update',compact('curso'));

    }
}
