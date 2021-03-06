<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AdminController;

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

Route::get('/', [MainController::class, 'index'])->name('index');
Route::get('/read_note/{uuid}', [MainController::class, 'read_note'])->name('read-note');
Route::post('/set_filter',[MainController::class, 'setFilters'])->name('set_filter');
Route::post('/clear_filter',[MainController::class, 'clearFilters'])->name('clear_filter');


Route::group(['middleware' => ['auth'], 'prefix' => 'dashboard'], function () {
    Route::get('/', [AdminController::class, 'index'])->name('dashboard');
    Route::get('/create_note', [AdminController::class, 'create_note'])->name('create_note');
    Route::post('/save_note', [AdminController::class, 'save_note'])->name('save_note');
    Route::get('/edit_note/{uuid}', [AdminController::class, 'edit_note'])->name('edit_note');
    Route::post('/update_note', [AdminController::class, 'update_note'])->name('update_note');
    Route::post('/share_note', [AdminController::class, 'share_note'])->name('share_note');
    Route::get('/shared_with_me', [AdminController::class, 'sharedWithMe'])->name('shared_with_me');
});
