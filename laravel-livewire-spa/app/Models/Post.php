<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /* mass assigment */

    protected $fillable = [
        'title',
        'content'
    ];
}
