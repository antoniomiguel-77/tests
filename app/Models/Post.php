<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
     use HasFactory,SoftDeletes;
    protected $fillable = [
        'title',
        'post',
        'image',
        'user_id',
        'like_id',
        'dislike_id'
    ];
}
