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
        return [
            'id' => (string)$this->id,
            'type' => 'Company',
            'attributes' => [
                'code' => $this->code,
                'name' => $this->name,
                'brand_name' => $this->brand_name,
                'contact_name' => $this->contact_name,
                'email' => $this->email,
                'website' => $this->website,
                'created_at' => $this->created_at,
                'updated_at' => $this->updated_at
            ]
        ];
    }
}
