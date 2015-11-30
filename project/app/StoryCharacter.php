<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\User;

class StoryCharacter extends Model
{
    protected $table = 'story_characters';

    protected $fillable = [
        'name',
        'description',
        'age',
        'weight',
        'height',
        'user_id'

    ];

    public function photos()
    {
        return $this->hasMany('App\Character_Photo');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
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
