<?php

use App\Http\Controllers\AuthContoller;
use App\Http\Controllers\CategoryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
 Route::post('/register',[AuthContoller::class, 'register']);
// Route::post("Auth/register",[AuthContoller::class, 'register'])->name('Auth.register');
Route::post('/login',[AuthContoller::class, 'login']);
Route::post('/infoUser',[AuthContoller::class, 'infoUser'])->middleware('auth:sanctum');

Route::post('/createOrUpdateCategory',[CategoryController::class, 'createOrUpdateCategory']);