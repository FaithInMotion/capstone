<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class story extends Model
{
    protected $table = 'user_stories';

    protected $fillable = [
        'title',
        'genre',
        'synopsis'
    ];

    public function photos()
    {
        return $this->hasMany('App\Story_Photo');
    }

    public static function foundAt($story_id)
    {
        $id = (int) $story_id;
        return static::where(compact('id'))->first();
    }

    public function addPhoto(Story_Photo $photo)
    {
        return $this->photos()->save($photo);
    }

}
