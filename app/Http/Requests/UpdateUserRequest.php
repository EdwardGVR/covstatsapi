<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
        // print_r($this->route('usuario'));
        return [
            //
            'name' => 'required | min:5 | max:100',
            'password' => 'required | min:5',
            'email' => 'unique:users,email, ' . $this->route('usuario')
        ];
    }
}
