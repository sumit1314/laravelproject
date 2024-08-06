<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use app\http\Controllers\api\usercontroller;
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
Route::post('create-user',[usercontroller::class,'createuser']);
