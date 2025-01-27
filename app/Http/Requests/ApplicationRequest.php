<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use App\Modalidades;

class ApplicationRequest extends FormRequest
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
            'nif' => [
                'required',
                'string',
                'max:20',
                Rule::unique('applications')->ignore($this->application), 
            ],
            'company_activity' => 'required|string|max:255',
            'smr_1' => 'required|integer|min:0',
            'smr_2' => 'required|integer|min:0',
            'dam_1' => 'required|integer|min:0',
            'dam_2' => 'required|integer|min:0',
            'daw_1' => 'required|integer|min:0',
            'daw_2' => 'required|integer|min:0',
            'observations' => 'nullable|string',
            'modality' => 'required|string|in:Presencial,Remoto,Híbrido',
        ];
    }

    public function messages()
    {
        return [
            'company_name.required' => 'El nombre de la empresa es obligatorio.',
            'nif.required' => 'El NIF es obligatorio.',
            'company_activity.required' => 'La actividad de la empresa es obligatoria.',
            'smr_1.required' => 'El número de alumnos de SMR 1º es obligatorio.',
            'smr_2.required' => 'El número de alumnos de SMR 2º es obligatorio.',
            'dam_1.required' => 'El número de alumnos de DAM 1º es obligatorio.',
            'dam_2.required' => 'El número de alumnos de DAM 2º es obligatorio.',
            'daw_1.required' => 'El número de alumnos de DAW 1º es obligatorio.',
            'daw_2.required' => 'El número de alumnos de DAW 2º es obligatorio.',
            'modality.required' => 'La modalidad es obligatoria.',
        ];
    }
}
