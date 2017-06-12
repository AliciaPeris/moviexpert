<?php

namespace moviexpert\Http\Requests;

use moviexpert\Http\Requests\Request;

class VotosConcursoRequest extends Request
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
          'idcortoconcurso' => 'required|numeric',
          'idusuario' => 'required|numeric',
          'voto' => 'required|numeric',
          'fechavoto' => 'required|date',

        ];
    }
}
