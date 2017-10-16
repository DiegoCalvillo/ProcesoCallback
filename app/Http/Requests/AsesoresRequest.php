<?php

namespace Proceso\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AsesoresRequest extends FormRequest
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
            'equipo' => 'required',
            'supervisores' => 'required',
            'sare' => 'required|unique:asesores',
            'campana' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'nombre_asesor.required' => 'El campo Nombre del Asesor es obligatorio',
            'equipo_id.required' => 'El campo Equipo es obligatorio',
            'supervisor_id.required' => 'El campo Supervisor es obligatorio',
            'sare.required' => 'El campo Sare es obligatorio',
            'campana_id.required' => 'El campo Campña es obligatorio',
            'sare.unique' => 'Este SARE ya está en uso',
        ];
    }
}
