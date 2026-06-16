<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
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
            'nombre'   => 'required|string|max:100',
            'email'    => 'required|email|max:150',
            'telefono' => 'required|string|max:20', // Adaptado a tu form
            'mensaje'  => 'required|string|min:10|max:1000',
        ];
    }

    public function messages(): array
    {
        return [
            'nombre.required'   => 'El nombre es obligatorio.',
            'email.required'    => 'El email es obligatorio.',
            'email.email'       => 'Formato de email inválido.',
            'mensaje.min'       => 'La consulta debe tener al menos 10 caracteres.',
            'telefono.required' => 'El teléfono es necesario para contactarte.',
            'email.unique'     => 'Este email ya ha sido utilizado para una consulta. Por favor, utiliza otro email o espera una respuesta.',
        ];
    }
}
