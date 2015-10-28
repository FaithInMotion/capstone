<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class Story_Photo extends Model
{
    protected $table = "story_photos";

    protected $fillable = ['photo'];

    protected $basePath = 'photos/story';

    public function story()
    {
        return $this->belongsTo('App\story');
    }

    public static function fromForm(UploadedFile $file, $story_id)
    {
        //un-used
        $extra = $story_id;
        $photo = new static;

        /*
         * Make sure the file name is unique so files
         * don't get accidentally overridden
         */
        $name = time().$file->getClientOriginalName();

        /*
         * Set the save place
         */
        $photo->path = $photo->basePath . "/" . $name;

        $file->move($photo->basePath, $name);

        return $photo;
    }
}
