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

Route::get('/', 'IndexController@welcome');

/*
 * Routes for Authentication
 */

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

/*
 * Routes for Scenery
 */
Route::resource('scenery', 'StoryScenery');
//Route::get('{story_id}/location/{id}', 'StoryScenery@show');
Route::get('location/{id}', [
    'as' => 'location',
    'uses' => 'StoryScenery@show'
]);
Route::post('location/{id}/photos', 'StoryScenery@addPhoto');

/*
 * Routes for Stories
 */
Route::resource('story', 'stories');
//Route::get('{id}', 'stories@show');
//Route::get('{user_id}/{story_id}', 'stories@show');
Route::get('story/{id}', [
    'as' => 'story',
    'uses' => 'Story@show'
]);
Route::post('story/{id}/photos/', 'stories@addPhoto');


/*
 * Routes for Characters
 */
Route::resource('character', 'StoryCharacters');
//Route::get('{story_id}/charcater/{id}', 'StoryCharacter@show');
Route::get('character_profile/{id}', [
    'as' => 'character_profile',
    'uses' => 'StoryCharacters@show'
]);
Route::post('character_profile/{id}/photos', 'StoryCharacters@addPhoto');

/*
 * Seed the database
 */
Route::get('stories/seed_database', 'stories@seed_story_table');