<?php

namespace Proceso\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsuariosEditarRequest extends FormRequest
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
            'name' => 'required',
            'sare' => 'required',
            'email' => 'required',
            'username' => 'required',
            'password2' => 'same:password1',                                                                                                         
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'El campo Nombre no puede estar vacio',
            'sare.required' => 'El campo SARE no puede estar vacio',
            'email.required' => 'El campo Correo no puede estar vacio',
            'username.required' => 'El campo Nombre de Usuario no puede estar vacio',
            'password2.same' => 'La Contraseña debe coincidir con la confirmación del Cambio de contraseña',
        ];
    }
}
