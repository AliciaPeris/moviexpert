<?php

namespace moviexpert\Http\Requests;

use moviexpert\Http\Requests\Request;

class ParticipanConcursoRequest extends Request
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
          'idconcurso' => 'required|numeric',
          'idusuario' => 'required|numeric',
          'titulo' => 'required',
          'descripcion' => 'required',
          'corto' => 'required|url',

        ];
    }
}
