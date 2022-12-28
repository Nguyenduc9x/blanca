<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = 'Post';

    protected $fillable = [
        'name',
        'content',
        'comment_count',
        'category_id',
        'image',
        'is_active'
  ];
}
