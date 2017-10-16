<?php

namespace Proceso\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AsesoresEditarRequest extends FormRequest
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
            'nombre_asesor' => 'required',
            'sare' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'nombre_asesor.required' => 'El campo Nombre del Asesor no puede estar vacio',
            'sare.required' => 'El campo SARE no puede estar vacio',
        ];
    }
}
