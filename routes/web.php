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

Route::get('/', 'WelcomeController@show');

Route::get('/home', 'HomeController@show');

Route::get('/create-site', 'SiteController@show');

Route::get('/delete', 'SiteController@del');

Route::resource('/api/v1/site', 'TestSiteController');
Route::resource('/api/aws', 'AwsSdkController');

Route::get('/update', 'SiteController@updateSite');

Route::post('/created',[
    'uses' => 'SiteController@createSite',
    'as' => 'created'
]);

Route::post('/delete',[
    'uses' => 'SiteController@deleteSite',
    'as' => 'deleted'
]);

Route::post('/updated',[
    'uses' => 'SiteController@updateTable',
    'as' => 'updated'
]);

Route::get('/seeAll', 'SiteController@siteTable');


Route::get('/show-site', 'SiteController@showSite');

Route::get('/siteshow', [
    'uses' => 'SiteController@siteShow',
    'as' => 'siteshow'
]);

Route::post('/showsite', [
    'uses' => 'SiteController@getSite',
    'as' => 'showsite'
]);

Route::get('/listings', [
    'uses' => 'SiteController@listAll',
    'as' => 'listings'
]);

Route::get('/all', 'SiteController@getAllSite');