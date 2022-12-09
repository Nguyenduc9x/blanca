<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $table = 'Users';

    protected $fillable = [
        'name',
        'username',
        'email',
        'level',
        'password',
        'bio',
        'date_birth'
  ];
}
