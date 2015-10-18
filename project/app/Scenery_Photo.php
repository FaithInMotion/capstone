<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class Scenery_Photo extends Model
{
    protected $table = "scenery_photos";

    protected $fillable = ['photo'];

    protected $basePath = 'photos/scenery';

    public function scenery()
    {
        return $this->belongsTo('App\Scenery');
    }

    public static function fromForm(UploadedFile $file, $location_id)
    {
        $photo = new static;

        /*
         * Make sure the file name is unique so files
         * don't get accidentally overridden
         */
        $name = time().$file->getClientOriginalName();

        /*
         * Set the save place
         */
        $photo->path = $photo->basePath . "/" . $location_id . "/" . $name;

        $file->move($photo->basePath, $name);

        return $photo;
    }
}
