<?php

namespace App\Http\Resources\Message;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class IndexResource extends JsonResource
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
            'author' => $this->profile_id,
            'chat' => $this->chat,
            'content' => $this->content,
        ];
    }
}
