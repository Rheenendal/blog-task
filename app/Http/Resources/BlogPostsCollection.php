<?php
/**
 * Created by PhpStorm.
 * User: glencampbell
 * Date: 27/01/22
 * Time: 08:27
 */

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class BlogPostsCollection extends ResourceCollection
{
    public function toArray($request)
    {
        $data = [];

        foreach ($this->collection as $item) {
            $data[] = [
                'id' => $item->id,
                'title' => $item->title,
                'body' => $item->body,
                'published_on' => $item->published_on,
                'comments' => BlogCommentResource::collection($item->comments),
            ];
        }

        return [
            'status' => 'success',
            'data' => $data,
        ];
    }
}