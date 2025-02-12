<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ApplicationResource extends JsonResource
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
            'nif' => $this->nif,
            'company_activity' => $this->company_activity,
            'smr' => [
                'smr_1' => $this->smr_1,
                'smr_2' => $this->smr_2,
            ],
            'dam' => [
                'dam_1' => $this->dam_1,
                'dam_2' => $this->dam_2,
            ],
            'daw' => [
                'daw_1' => $this->daw_1,
                'daw_2' => $this->daw_2,
            ],
            'observations' => $this->observations,
            'modality' => $this->modality,
            'company' => $this->company ? [
                'id' => $this->company->id,
                'name' => $this->company->name,
            ] : null,
        ];
    }
}
