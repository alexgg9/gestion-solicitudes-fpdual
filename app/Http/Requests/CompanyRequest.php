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
            'name' => 'required|string|max:255',
            'phone1' => 'required|string|max:20',
            'phone2' => 'nullable|string|max:20',
            'email' => 'required|email|max:255',
            'nif' => 'string|max:20',
            'address' => 'required|string|max:255',
            'town' => 'required|string|max:255',
            'province' => 'required|string|max:255',
            'postal_code' => 'required|string|max:10',
            'manager_name' => 'required|string|max:255',
            'manager_dni' => 'required|string|max:20',
            'modality' => 'required|string|in:Presencial,Remoto,Hibrido',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'El nombre de la empresa es obligatorio.',
            'phone1.required' => 'El teléfono de la empresa es obligatorio.',
            'email.required' => 'El correo electrónico de la empresa es obligatorio.',
            'nif.required' => 'El NIF de la empresa es obligatorio.',
            'address.required' => 'La dirección de la empresa es obligatoria.',
            'town.required' => 'La localidad de la empresa es obligatoria.',
            'province.required' => 'La provincia de la empresa es obligatoria.',
            'postal_code.required' => 'El código postal de la empresa es obligatorio.',
            'manager_name.required' => 'El nombre del responsable de la empresa es obligatorio.',
            'manager_dni.required' => 'El DNI del responsable de la empresa es obligatorio.',
            'modality.required' => 'La modalidad de la empresa es obligatoria.',
            'modality.in' => 'La modalidad de la empresa no es válida.',
            'nif.unique' => 'El NIF ya está registrado.',
        ];
    }
}
