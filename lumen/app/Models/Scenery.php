<?php
# app/Models/Scenery.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Scenery extends Model
{
    protected $table = 'story_scenery';

    public function photos()
    {
        return $this->hasMany('App\Scenery_Photos');
    }
}