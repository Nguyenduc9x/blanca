<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostTag extends Model
{
    use HasFactory;
    protected $table = 'posttag';

    protected $fillable = [
        'tags_id',
        'post_id',
        'updated_at',
        'created_at'
  ];
}
