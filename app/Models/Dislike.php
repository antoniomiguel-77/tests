<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Dislike extends Model
{
     use HasFactory,SoftDeletes;
    protected $fillable = [
        'likecounter',
        'user_id',
        'comment_id',
        'post_id'
    ];
}
