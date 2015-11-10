<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class Character_Photo extends Model
{
    protected $table = "character_photos";

    protected $fillable = ['photo'];

    protected $basePath = 'photos/character';

    public function character()
    {
        return $this->belongsTo('App\StoryCharacter');
    }

    public static function fromForm(UploadedFile $file, $character_id)
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
        $photo->path = $photo->basePath . "/" . $name;

        $file->move($photo->basePath, $name);

        return $photo;
    }
}