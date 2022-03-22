<?php
/**
 * Created by PhpStorm.
 * User: glencampbell
 * Date: 27/01/22
 * Time: 08:27
 */

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BlogPostsResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'status' => 'success',
            'data' => [
                'id' => $this->id,
                'title' => $this->title,
                'body' => $this->body,
                'published_at' => $this->published_at,
                'comments' => BlogCommentResource::collection($this->comments)
            ],
        ];
    }
}