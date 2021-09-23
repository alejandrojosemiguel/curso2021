<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Http\Requests\StoreCurso;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\CursoExport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CursoController extends Controller
{
    public function index(Request $request){

        $cursos = Curso::orderBy('id','desc')->paginate();
 
        return view('cursos.index',compact('cursos'));
    }

    public function show(Request $request, Curso $curso){
        return view('cursos.show',compact('curso'));
    }

    public function create(){

        return view('cursos.create');

    }
    
    public function store(StoreCurso $request){

        // return $request->all();

        $curso = Curso::create($request->all());

        // return $curso;

        return redirect()->route('cursos.index');

    }
    
    public function update(StoreCurso $request, Curso $curso){

        $curso->update($request->all());

        return redirect()->route('cursos.index');

    }

    public function edit(Curso $curso){

        return view('cursos.update',compact('curso'));
    }

    public function destroy(Curso $curso){

        // return $curso;
        
        $curso->delete();
 
        return redirect()->route('cursos.index');
    }   

    public function export() 
    {
        return Excel::download(new CursoExport, 'Cursos.xlsx');
    }

    public function storeExcel() 
    {
        return Excel::store(new CursoExport, 'exceles/Cursos.xlsx');
    }

}
