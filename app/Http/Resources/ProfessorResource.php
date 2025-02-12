<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProfessorResource extends JsonResource
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
            'dni' => $this->dni,
            'name' => $this->name,
            'surmane' => $this->surname,
            'email' => $this->email,
            'phone' => $this->phone,
            'department' => $this->department
        ];
    }
}
