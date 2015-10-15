<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
 * Routes for Scenery
 */
Route::resource('scenery', 'StoryScenery');
//Route::get('{story_id}/location/{id}', 'StoryScenery@show');
Route::get('location/{id}', 'StoryScenery@show');

/*
 * Routes for Stories
 */
Route::resource('story', 'stories');
Route::get('{id}', 'stories@show');
//Route::get('{user_id}/{story_id}', 'stories@show');


/*
 * Routes for Characters
 */
Route::resource('character', 'StoryCharacters');