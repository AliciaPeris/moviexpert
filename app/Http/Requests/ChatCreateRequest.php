<?php

namespace moviexpert\Http\Requests;

use moviexpert\Http\Requests\Request;

class ChatCreateRequest extends Request
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
          'nombre' => 'required',
          'descripcion' => 'required',
          'numguionistas' => 'required|numeric|min:0',
          'numactores' => 'required|numeric|min:0',
          'numdirectores' => 'required|numeric|min:0',
          'numcamaras' => 'required|numeric|min:0',

        ];
    }
}
