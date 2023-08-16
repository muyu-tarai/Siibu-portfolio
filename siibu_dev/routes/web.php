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

Route::get('/article_list', [ArticleListController::class, 'index'])->name('article.list.index');
Route::get('/article_list/word_search', [ArticleListController::class, 'wordSearchArticle'])->name('word.search.article.index');
Route::get('/article_list/tag_search', [ArticleListController::class, 'tagSearchArticle'])->name('tag.search.article.index');
Route::get('/mypage', [ArticleListController::class, 'mypage'])->name('mypage.index');
Route::get('/mypage/favorite_list', [ArticleListController::class, 'favoriteArticle'])->name('favorite.article.index');
Route::get('/article_submission', [ArticleListController::class, 'articleSubmission'])->name('article.submission.index');
Route::get('/mypage/article_edit', [ArticleListController::class, 'articleEdit'])->name('article.edit.index');
Route::get('/article_submission/check', [ArticleListController::class, 'checkSubmission'])->name('check.submission.index');
Route::get('/mypage/article_edit/check', [ArticleListController::class, 'checkEdit'])->name('check.edit.index');