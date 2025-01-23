<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use App\Modalidades;

class SolicitudRequest extends FormRequest
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
            'nif' => 'string|max:20',
            'actividad_empresa' => 'required|string|max:255',
            'smr_1' => 'required|integer|min:0',
            'smr_2' => 'required|integer|min:0',
            'dam_1' => 'required|integer|min:0',
            'dam_2' => 'required|integer|min:0',
            'daw_1' => 'required|integer|min:0',
            'daw_2' => 'required|integer|min:0',
            'observaciones' => 'nullable|string',
            'modalidad' => 'required|string|in:Presencial,Remoto,Híbrido',
        ];
    }

    public function messages()
    {
        return [
            'nombre_empresa.required' => 'El nombre de la empresa es obligatorio.',
            'nif.unique' => 'El NIF ya está registrado.',
            'smr_1.required' => 'El número de alumnos de SMR 1º es obligatorio.',
        ];
    }
}
