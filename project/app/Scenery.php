<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Scenery extends Model
{
    protected $table = 'story_scenery';

    protected $fillable = [
        'name',
        'description'
    ];

    public function photos()
    {
        return $this->hasMany('App\Scenery_Photo');
    }

    public static function foundAt($location_id)
    {
        $id = (int) $location_id;
        return static::where(compact('id'))->first();
    }

    public function addPhoto(Scenery_Photo $photo)
    {
        return $this->photos()->save($photo);
    }
}
