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

class BlogComment extends Model
{
    use HasFactory;

    protected $table = 'blog_comment';
}