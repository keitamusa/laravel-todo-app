<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::controller(TodoController::class)->group(function (){
    Route::get('/','index')->name('todos.index');
    Route::post('/todos/create','store')->name('todos.create');
    Route::get('/todos/view','view')->name('todos.view');
    Route::get('/todos/edit/{todo}','edit')->name('todos.edit');
    Route::post('/todos/update/{todo}','update')->name('todos.update');
    Route::get('/todos/delete/{todo}','delete')->name('todos.delete');
});
