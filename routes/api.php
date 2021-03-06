<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/analytics/events/{type}', 'APIController@getEvents');
Route::get('/analytics/events/{type}/{key}', 'APIController@getEventsWithKey');
Route::get('/analytics/events/{type}/{key}/{value}', 'APIController@getEventsByKeyAndValue');
Route::get('/analytics/event/', 'APIController@saveEvent');
Route::post('/analytics/event/', 'APIController@saveEvent');
Route::get('/browse/', 'APIController@getItemsByCategory');
Route::get('/items/', 'APIController@getItems');
Route::get('/item/', 'APIController@getItem');
Route::get('/page/{slug}', 'APIController@getPage');
Route::get('/page/{slug}/random', 'APIController@getRandomPageVariation');
Route::get('/random/', 'APIController@getRandomItem');
Route::get('/search/', 'APIController@search');

Route::get('repo/github/json/{filepath?}', 'GithubController@json')
    ->where('filepath', '(.*)');

Route::get('repo/github/raw/{filepath?}', 'GithubController@raw')
    ->where('filepath', '(.*)');

Route::get('repo/github/info/{filepath?}', 'GithubController@info')
    ->where('filepath', '(.*)');