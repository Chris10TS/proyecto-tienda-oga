<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactoRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nombre'   => ['required', 'string', 'max:100', 'regex:/^(?!\s*$).+/'],
            'email'    => ['required', 'email', 'max:150'],
            'telefono' => ['required', 'string', 'max:20'],
            'mensaje'  => ['required', 'string', 'min:10', 'max:1000', 'regex:/^(?!\s*$).+/'],
        ];
    }

    public function messages(): array
    {
        return [
            'nombre.required'   => 'El nombre es obligatorio.',
            'nombre.regex'      => 'El nombre no puede estar compuesto solo por espacios vacíos.',
            
            'email.required'    => 'El email es obligatorio.',
            'email.email'       => 'Formato de email inválido.',
            
            'telefono.required' => 'El teléfono es necesario para contactarte.',
            
            'mensaje.required'  => 'El mensaje de la consulta es obligatorio.',
            'mensaje.min'       => 'La consulta debe tener al menos 10 caracteres reales.',
            'mensaje.regex'     => 'El mensaje no puede contener únicamente espacios en blanco.',
            
            'email.unique'      => 'Este email ya ha sido utilizado para una consulta. Por favor, utiliza otro email o espera una respuesta.',
        ];
    }
}