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
    Route::get('/','index');
    Route::post('/create-todo','store');
    Route::get('/view-todo','view');
    Route::get('/edit-todo/{todo}','edit');
    Route::post('/update-todo/{todo}','update');
    Route::get('/delete-todo/{todo}','delete');
});
