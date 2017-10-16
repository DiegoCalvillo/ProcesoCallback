<?php

namespace Proceso\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class reportes1request extends FormRequest
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
            'supervisores' => 'required',
            'asesores' => 'required',
            'score_asesor' => 'required',
            'motivos' => 'required',
            'fecha_callback' => 'required',
            'fecha_callback' => 'date',
        ];
    }

    public function messages()
    {
        return [
            'supervisores.required' => 'El campo Supervisores es obligatorio',
            'asesores.required' => 'El campo Asesores es obligatorio',
            'score_asesor.required' => 'El campo Score Asesor es obligatorio',
            'motivo_id.required' => 'El campo Mótivo de falla es obligatorio',
            'fecha_callback.required' => 'El campo Fecha de Callback es obligatorio',
            'fecha_callback.date' => 'El campo Fecha de Callback no corresponde a una fecha valida',
        ];
    }
}
