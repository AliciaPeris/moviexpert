<?php

namespace moviexpert\Http\Requests;

use moviexpert\Http\Requests\Request;

class PeliculaCreateRequest extends Request
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
          'anio' => 'required|numeric',
          'pais' => 'required',
          'director' => 'required',
          'guion' => 'required',
          'reparto' => 'required',
          'sinopsis' => 'required',
          'trailer' => 'required|url',

            //
        ];
    }
}
