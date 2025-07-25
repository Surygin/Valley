<?php

namespace App\Http\Resources\Admin\Post;

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
            'title' => $this->title,
            'description' => $this->description,
            'published_at' => $this->published_at,
            'author' => $this->author,
            'views' => $this->views,
            'img_path' => $this->img_path,
            'tag' => $this->tag,
        ];
    }
}
