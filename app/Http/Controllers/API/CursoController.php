<?php
   
namespace App\Http\Controllers\API;
   
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use Illuminate\Support\Facades\Validator;
use App\Models\Curso;
use App\Http\Resources\Curso as CursoResource;
   
class CursoController extends BaseController
{
 
    public function index()
    {
        $Cursos = Curso::all();
        return $this->sendResponse(CursoResource::collection($Cursos), 'Posts fetched.');
    }
 
    
    public function store(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'name' => 'required',
            'category' => 'required',
            'description' => 'required'
        ]);
        if($validator->fails()){
            return $this->sendError($validator->errors());       
        }
        $Curso = Curso::create($input);
        return $this->sendResponse(new CursoResource($Curso), 'Post created.');
    }
 
   
    public function show($id)
    {
        $Curso = Curso::find($id);
        if (is_null($Curso)) {
            return $this->sendError('Post does not exist.');
        }
        return $this->sendResponse(new CursoResource($Curso), 'Post fetched.');
    }
    
 
    public function update(Request $request, Curso $Curso)
    {
        $input = $request->all();
 
        $validator = Validator::make($input, [
            'name' => 'required',
            'category' => 'required',
            'description' => 'required'
        ]);
 
        if($validator->fails()){
            return $this->sendError($validator->errors());       
        }
 
        $Curso->title = $input['title'];
        $Curso->description = $input['description'];
        $Curso->save();
        
        return $this->sendResponse(new CursoResource($Curso), 'Post updated.');
    }
   
    public function destroy(Curso $Curso)
    {
        $Curso->delete();
        return $this->sendResponse([], 'Post deleted.');
    }
}
