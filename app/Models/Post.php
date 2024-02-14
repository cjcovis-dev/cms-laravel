<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';

    protected $fillable = [
        'title', 'slug', 'content', 'is_published', 'image_path', 'image_name', 
        'lang','category_id', 'user_id'
    ];
}
