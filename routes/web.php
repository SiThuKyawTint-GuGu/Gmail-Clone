<?php

use App\Http\Controllers\Admin\AdminContentController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\User\ContentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ViewController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Mailer\Test\Constraint\EmailCount;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', [UserController::class, 'user'])->name('user#route');
Route::post('/loginpage', [UserController::class, 'loginpage'])->name('login#page');
Route::get('/registerpage', [UserController::class, 'registerpage'])->name('register#page');


Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    //Main Ui 
    Route::get('dashboard', [UserController::class, 'dashboard'])->name('dash#board');

    //Admin Home Page
    Route::group(['prefix' => 'admin', 'middleware' => 'admin_middleware'], function () {
        Route::get('/admincontent', [AdminContentController::class,'admincontent'])->name('admin#content');
    });

    //User Home Page
    Route::group(['prefix' => 'user', 'middleware' => 'user_middleware'], function () {
        Route::get('/usercontent', [ContentController::class, 'usercontent'])->name('user#content');

        //Emails 
        Route::prefix('email')->group(function(){
            Route::post('/sentmail',[EmailController::class,'sentmail'])->name('sent#mail');
            Route::get('accountview',[EmailController::class,'accountview'])->name('account#view');
            Route::get('accountedit',[EmailController::class,'accountedit'])->name('account#edit');
            Route::post('updatedata/{id}',[EmailController::class,'updatedata'])->name('update#data');
            Route::get('passwordchange',[EmailController::class,'passwordchange'])->name('password#change');
            Route::post('passwordupdate/{id}',[EmailController::class,'passwordupdate'])->name('password#update');
            Route::get('delitem/{id}',[EmailController::class,'delitem'])->name('del#item');
        });

        //view 
        Route::prefix('view')->group(function(){
            Route::get('contentview/{userid}/{id}',[ViewController::class,'contentview'])->name('content#view');
        });
    });

});

