<?php

namespace Proceso\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SupervisoresEditarRequest extends FormRequest
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
            'nombre_supervisor' => 'required',
            'sare' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'nombre_supervisor.required' => 'El campo Nombre del Supervisor no puede estar vacio',
            'sare.required' => 'El campo SARE no puede estar vacio'
        ];
    }
}
