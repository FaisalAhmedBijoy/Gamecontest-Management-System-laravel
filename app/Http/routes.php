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

Route::get('/player',function (){
    return view('player');
});

Route::get('/volunteer',function (){
    return view('volunteer');
});
Route::get('/game',function (){
    return view('game');
});

Route::get('/score',function (){
    return view('score');
});

Route::get('/category',function (){
    return view('category');
});


Route::get('/schedule',function (){
    return view('schedule');
});

Route::resource('/play','PlayerController');




Route::resource('/maintain','VolunteerController');




Route::resource('/result','GameController');
Route::get('/gameinsert','GameController@gameinsert');
Route::get('/gameshow','GameController@gameshow');
Route::get('/gametiminginsert','GameController@gametiminginsert');
Route::get('/winner','GameController@winner');
Route::get('/score','GameController@score');
Route::get('/logincheck','GameController@logincheck');
Route::get('/homepage','GameController@homepage');
Route::get('/gameresultanalysis','GameController@gameresultanalysis');



Route::get('/playerinsert','PlayerController@playerinsert');
Route::get('/showplayer','PlayerController@showplayer');



Route::get('/volunteerinsert','VolunteerController@volunteerinsert');
Route::get('/showvolunteer','VolunteerController@showvolunteer');