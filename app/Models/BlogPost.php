<?php
/**
 * Created by PhpStorm.
 * User: glencampbell
 * Date: 27/01/22
 * Time: 08:14
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    use HasFactory;

    protected $table = 'blog_posts';

    protected $fillable = ['title', 'body', 'published_on'];

    public function comments()
    {
        return $this->hasMany(BlogComment::class);
    }
}