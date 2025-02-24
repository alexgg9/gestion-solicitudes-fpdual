<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CompanyResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        //return parent::toArray($request);
        return [
            'id' => $this->id,
            'name' => $this->name,
            'phone1' => $this->phone1,
            'phone2' => $this->phone2,
            'email' => $this->email,
            'nif' => $this->nif,
            'address' => $this->address,
            'town' => $this->town,
            'province' => $this->province,
            'postal_code' => $this->postal_code,
            'manager_name' => $this->manager_name,
            'manager_dni' => $this->manager_dni,
            'modality' => $this->modality,
        ];
    }
}
