<?php

namespace App\Exports;

use App\Models\Curso;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;

class CursoExport implements FromView
{

    
    public function view(): View
    {
        return view('exports.cursos', [
            'cursos' => Curso::where('id','<','10')->get()
        ]);
    }


}
