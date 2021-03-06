<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;

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
})->name('home');
Route::get('/about', function(){
    return ('Hello welcome to about page');
})->name('about-page');
Route::get('/posts/{id}', function($id) { 
    return ("Hello this is page {$id}");
    })->name('pages');

Route::get('/contact', [PagesController::class, 'contact']);
Route::get('/services', [PagesController::class, 'services']);
Route::resource('/post', PostsController::class);