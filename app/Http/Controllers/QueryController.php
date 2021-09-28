<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QueryController extends Controller
{
    public function index(Request $request){

        $names = DB::table('users')->pluck('name','id');
        $categories = DB::table('cursos')->select('category')->distinct()->get();

        $query = DB::table('users')
        ->join('curso_user', 'users.id', '=', 'curso_user.user_id')
        ->join('cursos', 'curso_user.curso_id', '=', 'cursos.id')
        ->select('cursos.id as cursoid','cursos.name','cursos.category','cursos.description');        
 
        $subQuery = DB::table('cursos')
        ->join('curso_user', 'curso_user.curso_id', '=', 'cursos.id')
        ->select(DB::raw('max(cursos.id)'))
        ->where('cursos.category','=','Desarrollo Web')
        ->groupBy('curso_user.user_id');
 
        $query->whereIn('cursos.id', $subQuery);


        $users = $query->paginate(6);

        $totales['count']= DB::table('users')->count();
        $totales['min']= DB::table('users')->min('id');
        $totales['max']= DB::table('users')->max('id');
        $totales['avg']= DB::table('users')->avg('id');
        $totales['sum']= DB::table('users')->sum('id');
        
        return view('users.index',[
            'users' => $users,
            'names' => $names,
            'user_id' => $request->user_id,
            'totales' => $totales,
            'categories' => $categories,
            'category' => $request->category,
        ]);
    }
}
