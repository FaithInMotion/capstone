<?php
namespace app\Http\Utilities;

class Genre
{
    protected static $genres = [
        "Horror"            => 1,
        "Romance"           => 2,
        "Thriller"          => 3,
        "Suspense"          => 4,
        "Science Fiction"   => 5,
        "Fan Fiction"       => 6,
        "Journal"           => 7
    ];

    public static function all()
    {
        return static::$genres;
    }

}