<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCurso extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'=>'required|max:10',
            'description'=>'required|min:10',
            'category'=>'required|min:10'
        ];
    }

    public function attributes()
    {
        return [            
            'name'=>'nombre del curso',
            'description'=>'descripción del curso',
        ];
    }

    public function messages()
    {
        return [            
            'description.required'=>'Debe ingresar una descripcion del curso',
            'description.min'=>'El campo :attribute requiere un minimo de 10 caracteres',
        ];
    }

}
