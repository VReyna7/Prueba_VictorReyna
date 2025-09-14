<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TareaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'titulo' => $this->title,
            'descripcion' => $this->descripcion,
            'estado' => $this->estado,
            'fecha_limite' => $this->fecha_limite,
        ];
    }
}
