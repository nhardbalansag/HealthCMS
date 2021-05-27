<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\{RouteController, TraceFormCategoryController, TraceFormController, TraceFormChoicesController};
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\user\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::middleware('auth')->group(function(){
    Route::get('/home', 'HomeController@index')->name('home');

    Route::middleware('UserRoleAuthenticate:admin')->group(function(){
        Route::prefix('admin')->group(function () {
            Route::get('dashboard-main', [RouteController::class, 'index'])->name('dashboard-main');
            Route::get('trace-category', [TraceFormCategoryController::class, 'index'])->name('trace-category');
            Route::get('view-add-form-trace-category', [TraceFormCategoryController::class, 'View_AddFormCategory'])->name('view-add-form-trace-category');
            Route::post('create-add-form-trace-category', [TraceFormCategoryController::class, 'Create_AddFormCategory'])->name('create-add-form-trace-category');

            Route::get('view-add-form-trace', [TraceFormController::class, 'index'])->name('view-add-form-trace');
            Route::get('view-form-trace', [TraceFormController::class, 'index'])->name('view-form-trace');
            Route::post('create-add-form-trace', [TraceFormController::class, 'create_FormQuestion'])->name('create-add-form-trace');

            Route::get('delete-options', [TraceFormChoicesController::class, 'deleteOption'])->name('delete-options');
            Route::post('edit-options', [TraceFormChoicesController::class, 'editOption'])->name('edit-options');
        });
    });

    Route::middleware('UserRoleAuthenticate:user')->group(function(){
        Route::prefix('user')->group(function () {
            Route::get('home', [UserController::class, 'index'])->name('user-home-index');
        });
    });

});
