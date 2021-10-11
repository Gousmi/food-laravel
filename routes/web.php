<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RecipeController;
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

Route::get('/', function () {return view('welcome');});
// Route::get('{salutation}/{name}',[PageController::class, 'salutation' ])->where(['salutation' => '[A-Za-z]+' , 'name' => '[A-Za-z]+']);

// Recipes routes

Route::get('recipes',[RecipeController::class, 'index']);  

Route::get('master', function(){return view('layouts/master');});

Route::get('recipe/create', function(){return view('recipe/create');});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
