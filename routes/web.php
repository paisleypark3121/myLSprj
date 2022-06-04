<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkerController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/db', 'App\Http\Controllers\WorkerController@index');

Route::get('/db2', [WorkerController::class,'index']);

Route::get('/db3', 'WorkerController@index');