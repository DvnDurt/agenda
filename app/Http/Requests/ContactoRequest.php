<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactoRequest extends FormRequest
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
        switch($this->method()) {
            case "POST": // creando registro
                return [
                    
                    'nombre' => 'required|max:100',
                    'telefono' => 'required|max:15',
                    'mail' => 'email|max:200|unique:contactos',
                    'photo' => 'nullable|sometimes|image|mimes:jpg,jpeg,png,gif'
                ];
                break;

            case "PUT": // actualizar
                return [
                    'nombre' => 'required|max:100',
                    'telefono' => 'required|max:15',
                    'mail' => 'email|max:200|unique:contactos,email,'.$this->id,
                    'photo' => 'nullable|sometimes|image|mimes:jpg,jpeg,png,gif'
                ];
                break;
            default:break;
        }
    }
    public function messages()
    {
        return [
            'nombre.required' => 'Nombre Obligatorio',
            'telefono.required' => 'Telefono Obligatorio',
            'email.email' => 'Introduce un correo electronico valido'
        ];
    }
}
