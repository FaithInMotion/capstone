<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class story extends BaseModel
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

    /**
     * Get latest uploaded photo from hasMany relation.
     *
     * @return Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function latestPhoto()
    {
        return $this->photos()->latest()->nPerGroup('story_id', 1);
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
