<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StoryCharacter extends Model
{
    protected $table = 'story_characters';

    protected $fillable = [
        'name',
        'description',
        'age',
        'weight',
        'height'

    ];
}
