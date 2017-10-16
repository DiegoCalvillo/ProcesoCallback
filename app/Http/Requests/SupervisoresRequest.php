<?php

namespace Proceso\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SupervisoresRequest extends FormRequest
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
            'equipo' => 'required',
            'sare' => 'required|unique:supervisores',
            'campana' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'nombre_supervisor.required' => 'El campo Nombre del Supervisor es obligatoio',
            'equipo_id.required' => 'El campo Equipo es obligatorio',
            'sare.required' => 'El campo SARE es obligatorio',
            'campana_id.required' => 'El campo Campaña es obligatorio',
            'sare.unique' => 'Este SARE ya está en uso',
        ];
    }
}
