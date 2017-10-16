<?php

namespace Proceso\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsuariosRequest extends FormRequest
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
            'puesto' => 'required',
            'sare' => 'required|unique:users',
            'email' => 'required|unique:users',
            'username' => 'required',
            'password' => 'required',
            'password' => 'min:6',
            'password2' => 'required',
            'password2' => 'same:password',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'El campo Nombre es obligatorio',
            'puesto_id.required' => 'El campo Rol es obligatorio',
            'sare.required' => 'El campo SARE es obligatorio',
            'email.required' => 'El campo Correo es obligatorio',
            'username.required' => 'El campo Nombre de Usuario es obligatorio',
            'password.required' => 'Debes ingresar contraseña',
            'password2.required' => 'Debes confirmar la contraseña',
            'sare.unique' => 'Este SARE ya está en uso',
            'email.unique' => 'Este Correo Electrónico ya está en uso',
            'password.min' => 'La Contraseña debe contener minimo 6 caracteres',
            'password2.same' => 'La Contraseña debe coincidir con la confirmación de contraseña',
        ];
    }
}
