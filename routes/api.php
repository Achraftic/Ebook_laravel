<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\pageController;
use App\Http\Controllers\CategoryController;
use  App\Http\Controllers\booksController;
use   App\Http\Controllers\DashboardController;
use   App\Http\Controllers\wishListController;
use   App\Http\Controllers\UserController;
use App\Http\Middleware\notAdmin;

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
// all routes / api here mmust be api authenticated
Route::group(['middleware'=>['api','checkPassword']],function(){

    Route::prefix('/dashboard/user')->group(function(){
        Route::get('/view',[ UserController::class,'index'] )->name('user.index');
        Route::get('/store',[ UserController::class,'store'] )->name('userDashboard.store');
        Route::get('/search',[ UserController::class,'search'] )->name('user.search');
        Route::get('/delete/{id}',[ UserController::class,'delete'] )->name('user.delete');
        Route::get('/edit/{id}',[ UserController::class,'edit'] )->name('users.edit');
        Route::post('/update/{id}',[ UserController::class,'update'] )->name('users.update');


    });

});
