<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePostRequest extends FormRequest
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
            'titulo' => 'required',
            'contenido' => 'required',
            'categoria_id' => 'required'
        ];
    }

    // Customize the error messages shown when a validation rule fails
    public function messages () {
        return [
            'titulo.required' => 'El campo titulo es requerido',
            'contenido.required' => 'El campo contenido es requerido',
            'categoria_id.required' => 'El id de la categoria es requerido',
        ];
    }
}
