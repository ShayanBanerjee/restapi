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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//list colleges
Route::get('colleges','CollegeController@index');

//list single college
Route::get('college/{id}','CollegeController@show');

//create new college
Route::post('college','CollegeController@store');

//update college
Route::put('college','CollegeController@store');

//delete college
Route::delete('college/{id}','CollegeController@destroy');