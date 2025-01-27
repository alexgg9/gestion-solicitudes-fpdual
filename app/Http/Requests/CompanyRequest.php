<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use App\Modalidades;

class CompanyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nombre_empresa' => 'required|string|max:255',
            'telefono1' => 'required|string|max:20',
            'telefono2' => 'nullable|string|max:20',
            'email' => 'required|email|max:255',
            'nif' => 'string|max:20',
            'direccion' => 'required|string|max:255',
            'localidad' => 'required|string|max:255',
            'provincia' => 'required|string|max:255',
            'cp' => 'required|string|max:10',
            'nombre_gerente' => 'required|string|max:255',
            'dni_gerente' => 'required|string|max:20',
            'modalidad' => 'required|string|in:Presencial,Remoto,Híbrido',
        ];
    }

    public function messages()
    {
        return [
            'nombre_empresa.required' => 'El nombre de la empresa es obligatorio.',
            'nif.unique' => 'El NIF ya está registrado.',
        ];
    }
}
