<?php
/**
 * Created by PhpStorm.
 * User: glencampbell
 * Date: 27/01/22
 * Time: 08:28
 */

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BlogCommentResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'comment' => $this->comment,
            'commented_on' => $this->commented_on,
        ];
    }
}