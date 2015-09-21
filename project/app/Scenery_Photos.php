<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Scenery_Photos extends Model
{
    protected $table = "scenery_photos";

    protected $fillable = ['photo'];

    public function scenery()
    {
        return $this->belongsTo('App\Scenery');
    }
}
