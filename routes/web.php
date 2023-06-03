<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\pageController;
use App\Http\Controllers\CategoryController;
use  App\Http\Controllers\booksController;
use   App\Http\Controllers\DashboardController;
use   App\Http\Controllers\wishListController;
use   App\Http\Controllers\UserController;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;




require __DIR__.'/auth.php';

require __DIR__.'/auth.php';

require __DIR__.'/auth.php';

require __DIR__.'/auth.php';


Route::get('/dashboard',[DashboardController::class,'index'] )->name('admin.index')->middleware('notAdmin',"RedirectIfNotLoggedIn");

Route::get('/', [pageController::class,'index'] )->name('welcome');
Route::post('/send', [pageController::class,'send'] )->name('send.msg');
Route::get('/test', [pageController::class,'test'] )->name('test');
Route::get('/filter', [pageController::class,'filter'] )->name('filter');


Route::prefix('/dashboard/user')->group(function(){
    Route::get('/view',[ UserController::class,'index'] )->name('user.index')->middleware('notAdmin',"RedirectIfNotLoggedIn");
    Route::get('/store',[ UserController::class,'store'] )->name('userDashboard.store')->middleware('notAdmin',"RedirectIfNotLoggedIn");
    Route::get('/search',[ UserController::class,'search'] )->name('user.search')->middleware('notAdmin',"RedirectIfNotLoggedIn");
    Route::get('/delete/{id}',[ UserController::class,'delete'] )->name('user.delete')->middleware('notAdmin',"RedirectIfNotLoggedIn");
    Route::get('/edit/{id}',[ UserController::class,'edit'] )->name('users.edit')->middleware('notAdmin',"RedirectIfNotLoggedIn");
    Route::post('/update/{id}',[ UserController::class,'update'] )->name('users.update')->middleware('notAdmin',"RedirectIfNotLoggedIn");


});

Route::prefix('books')->group(function () {
            //admin
    Route::get('/book', [booksController::class,'index'] )->name('books');
    Route::get('/book/create', [booksController::class,'create'] )->name('books.create');
    Route::post('/book/store', [booksController::class,'store'] )->name('books.store');
    Route::get('/book/delete/{id}', [booksController::class,'delete'] )->name('books.delete');
    Route::get('/book/search', [booksController::class,'search'] )->name('books.search');

    ///for user
    Route::get('/', [booksController::class,'books'] )->name('books.index');
    Route::get('/book/test', [booksController::class,'test'] )->name('books.test');
    Route::get('/book/show/{id}', [booksController::class,'show'] )->name('books.show');
    Route::get('/book/edit/{id}', [booksController::class,'edit'] )->name('books.edit');
    Route::post('/book/update/{id}', [booksController::class,'update'] )->name('books.update');
    Route::get('/book/comment/add/{id}', [booksController::class,'commentadd'] )->name('books.add.comment');
    Route::get('/book/comment/{id}', [booksController::class,'comment'] )->name('books.comment');
    Route::get('/book/downloadPdf/{id}', [booksController::class,'downloadPdf'] )->name('books.downloadPdf');
    Route::get('/filter/{id}', [booksController::class,'filter'] )->name('books.filter');
    //
    Route::get('/category', [CategoryController::class,'index'] )->name('category.index');
    Route::get('/category/create', [CategoryController::class,'create'] )->name('category.create');
    Route::post('/category/store', [CategoryController::class,'store'] )->name('category.store');
    Route::get('/category/edit/{id}', [CategoryController::class,'edit'] )->name('category.edit');
    Route::post('/category/update/{id}', [CategoryController::class,'update'] )->name('category.update');

});
Route::prefix('user')->group(function () {
    Route::get('/logout', [UsersController::class,'logout'] )->name('user.logout');
    Route::get('/view/', [UsersController::class,'index'] )->name('user.view');
    Route::get('/view/edit/{id}', [UsersController::class,'edit'] )->name('user.edit');
    Route::post('/view/update/{id}', [UsersController::class,'update'] )->name('user.update');

});


Route::get('/pdf/{filename}', function ($filename) {
    $path = public_path( "pdf/". $filename);



    if (!File::exists($path)) {
        abort(404);
    }
    $file = File::get($path);

    $response = response($file, 200)->header('Content-Type', 'application/pdf');
    $response->header('Content-Disposition', 'inline; filename="' . $filename . '"');
    return $response;
})->name('pdf.read');

Route::prefix('wishlist')->group(function () {
    Route::get('/', [wishListController::class,'index'] )->name('wishlist.index');
    Route::post('/store', [wishListController::class,'store'] )->name('wishlist.store')->middleware('RedirectIfNotLoggedIn');
    Route::get('/delete/{id}', [wishListController::class,'delete'] )->name('wishlist.delete')->middleware('RedirectIfNotLoggedIn');
    // Route::get('/view', [UsersController::class,'index'] )->name('user.view');
    // Route::get('/view/edit/{id}', [UsersController::class,'edit'] )->name('user.edit');
    // Route::post('/view/update/{id}', [UsersController::class,'update'] )->name('user.update');

});
