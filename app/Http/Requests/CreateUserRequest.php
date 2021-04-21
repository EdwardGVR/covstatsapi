<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // Cambiar a true
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
            // validaciones a cumplirse
            'nombres' => 'required | min:5 | max:100',
            'apellidos' => 'required | min:5 | max:100',
            'password' => 'required | min:5',
            'email' => 'unique:usuarios,email',
            'municipio_id' => 'required'
        ];
    }

    public function messages () {
        return [
            'nombres.required' => 'El campo nombres es requerido',
            'apellidos.required' => 'El campo apellidos es requerido',
            'password.required' => 'El campo contraseña es requerido',
            'password.min' => 'La contraseña debe tener al menos 5 caracteres',
            'email.unique' => 'El email ya está en uso',
            'email.required' => 'El campo email es requerido'
        ];
    }
}
