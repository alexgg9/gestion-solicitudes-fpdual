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
            'company_name' => 'required|string|max:255',
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
            'nombre_empresa.required' => 'El nombre de la empresa es obligatorio.',
            'nif.unique' => 'El NIF ya está registrado.',
        ];
    }
}
