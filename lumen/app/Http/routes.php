<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', function () use ($app) {
    return $app->welcome();
});

$app->get('/test_view',  [
//    'uses' => 'Users@TestMethod'
    'as' => 'testing', 'uses' => 'Users@TestMethod'
]);

/*
 * Routes for Scenery
 */
$app->get('/scenery/create', [
    'as' => 'scenery', 'uses' => 'Story_Scenery@create'
]);

$app->get('/scenery/{story_id}', [
   'as' => 'scenery', 'uses' => 'Story_Scenery@list_scenery'
]);
