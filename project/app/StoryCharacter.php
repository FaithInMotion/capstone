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

    public function photos()
    {
        return $this->hasMany('App\Character_Photo');
    }

    public static function foundAt($character_id)
    {
        $id = (int) $character_id;
        return static::where(compact('id'))->first();
    }


    public function addPhoto(Character_Photo $photo)
    {
        return $this->photos()->save($photo);
    }
}
