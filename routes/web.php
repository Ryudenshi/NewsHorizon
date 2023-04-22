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

// Route::get('/news-page-1', 'newsController@news');

// Route::get('/projects', 'projectController@index');

// Route::get('/projects/create', 'projectController@create');

// Route::post('/projects', 'projectController@store');

// Route::get('projects/create', 'categoryController@chooseCategory');

// Route::get('/projects/{id}', 'projectController@show');

Route::get('/home', 'homeController@home');

Route::get('/', 'homeController@home');

Route::resource('projects', 'projectController');
Route::get('/category', [projectController::class, 'category']);

Route::get('test', function () {
    dd('jfalksflaks');
});

Route::get('projects/{project}', [projectController::class, 'show']);

Auth::routes();

Route::get('/auth', 'AuthController@index')->name('auth');
