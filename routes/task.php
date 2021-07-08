<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Task Routes
|--------------------------------------------------------------------------
|
| Here is where you can register task routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "auth" middleware group.
|
*/

Route::group(['namespace' => 'Task'], function () {
    Route::resource('/','TaskController',['only' => ['index', 'store','destroy']]);
 });
