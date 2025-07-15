<?php

namespace App\Http\Resources\Admin\Post;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ShowResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'title' => $this->title,
            'description' => $this->description,
            'published_at' => $this->published_at,
            'author' => $this->author,
            'views' => $this->views,
            'img_path' => $this->img_path,
            'tag' => $this->tag,
            'content' => $this->content,
            'status' => $this->status,
            'category' => $this->category,
            'is_active' => $this->is_active,
        ];
    }
}
