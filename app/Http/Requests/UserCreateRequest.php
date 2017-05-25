<?php

namespace moviexpert\Http\Requests;

use moviexpert\Http\Requests\Request;

class UserCreateRequest extends Request
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
            'email' => 'required|unique:users|email',
            'password' => 'required',
            'nombre' => 'required',
            'apellidos' => 'required',
            'direccion' => 'required',
            'localidad' => 'required',
            'genero' => 'required',
            'fechanacimiento' => 'required',
            'tipousuario' => 'required',
        ];
    }
}
