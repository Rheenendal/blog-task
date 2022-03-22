<?php
/**
 * Created by PhpStorm.
 * User: glencampbell
 * Date: 27/01/22
 * Time: 08:19
 */

namespace App\Http\Api\V1\Controllers;

use App\Http\Resources\BlogPostsCollection;
use App\Http\Resources\BlogPostsResource;
use App\Models\BlogPost;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class BlogPostsController
{
    public function index(): ResourceCollection
    {
        return new BlogPostsCollection(BlogPost::all());
    }

    public function show(BlogPost $blogPost): JsonResource
    {
        return new BlogPostsResource($blogPost);
    }
}