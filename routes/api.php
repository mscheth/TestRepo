<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentsController;

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

Route::post('/store',[App\Http\Controllers\studentsController::class,'store']);

//to update

Route::post('/update/{id}',[App\Http\Controllers\studentsController::class,'update']);

//to update

Route::post('/show',[App\Http\Controllers\studentsController::class,'show']);
//to delete
Route::post('/deletee/{id}',[App\Http\Controllers\studentsController::class,'delete']);
//to show one id

Route::post('/showone/{id}',[App\Http\Controllers\studentsController::class,'showone']);

