<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class story extends Model
{
    //
    protected $table = 'user_stories';

    protected $fillable = [
        'title',
        'genre',
        'synopsis'
    ];
}
