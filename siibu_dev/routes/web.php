<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleListController;
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

Route::get('/article_list', [ArticleListController::class, 'index'])->name('article_list.index');
