<?php

use App\Http\Controllers\categoryController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\projectController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;

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

Route::get('/home', 'homeController@home');

Route::get('/', 'homeController@home');

Route::resource('projects', 'projectController');

Route::get('/category', [projectController::class, 'category']);

Route::get('/projects/{id}', 'ProjectController@show')->name('projects.show');

Auth::routes();

Route::get('/auth', 'AuthController@index')->name('auth');
