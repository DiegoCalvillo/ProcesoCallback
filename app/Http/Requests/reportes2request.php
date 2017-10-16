<?php

namespace Proceso\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class reportes2request extends FormRequest
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
            'categorias' => 'required',
            'comportamiento' => 'required',
            'sub_categorias' => 'required',
            'incoveniente' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'categorias.required' => 'El campo Categorías es obligatorio',
            'comportamiento.required' => 'El campo comportamiento es obligatorio',
            'sub_categorias.required' => 'El campo SubCategorías es obligatorio',
            'incoveniente.required' => 'Se debe contestar el campo ¿Se resolvió el incoveniente a la entera satisfación del usuario?'
        ];
    }
}
