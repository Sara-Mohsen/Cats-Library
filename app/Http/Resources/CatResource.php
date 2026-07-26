<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CatResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
{
    return [
        'id' => $this->id,
        'name' => $this->name,
        'age' => $this->age,
        'color' => $this->color,
        'emotion' => $this->emotion,

        'shelter' => [
            'id' => $this->shelter->id,
            'breed' => $this->shelter->breed,
            'file_number' => $this->shelter->file_number,
        ],
    ];
}

} 
