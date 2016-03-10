<?php

/*
 * --------------------------------------------
 *      Sectorr routing.
 * --------------------------------------------
 */

use Sectorr\Core\Http\Route;

Route::get('/', ['as' => 'home', 'uses' => 'PostsController@index']);
Route::get('post/{slug}', ['as' => 'post', 'uses' => 'PostsController@post']);