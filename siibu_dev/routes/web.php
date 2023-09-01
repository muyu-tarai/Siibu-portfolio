<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TmpController;
use App\Http\Controllers\ArticleListController;
use App\Http\Controllers\ArticleSubmissionController;
use App\Http\Controllers\MypageController;
use App\Http\Controllers\ArticleEditController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    if(Auth::check()){
    return view('article_list');
    }else{
        return view('auth/login');
    }
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/article_list', [ArticleListController::class, 'articleList'])->name('article.list');
Route::get('/article_list/item/{articleId}', [ArticleListController::class, 'item'])->name('item');
Route::post('/article_list/word_search', [ArticleListController::class, 'wordSearchArticle'])->name('word.search.article');
Route::get('/article_list/tag_search/{tagId}', [ArticleListController::class, 'tagSearchArticle'])->name('tag.search.article');
Route::get('/mypage', [MypageController::class, 'mypage'])->name('mypage');
Route::get('/mypage/favorite_list', [TmpController::class, 'favoriteArticle'])->name('favorite.article');
Route::get('/article_submission', [ArticleSubmissionController::class, 'articleSubmission'])->name('article.submission');
Route::post('/article_submission', [ArticleSubmissionController::class, 'returnArticleSubmission'])->name('article.submission');
Route::post('/article_submission/check', [ArticleSubmissionController::class, 'articleSubmissionCheck'])->name('article.submission.check');
Route::post('/article_submission/complete', [ArticleSubmissionController::class, 'articleSubmissionComplete'])->name('article.submission.complete');
Route::get('/mypage/article_edit/{articleId}', [ArticleEditController::class, 'articleEdit'])->name('article.edit');
Route::post('/mypage/article_edit/check', [ArticleEditController::class, 'articleEditCheck'])->name('article.edit.check');
Route::get('/mypage/article_edit/complete', [ArticleEditController::class, 'articleEditComplete'])->name('article.edit.complete');
Route::get('/mypage/delete_member', [TmpController::class, 'deleteMember'])->name('delete.member');
Route::get('/mypage/delete_member/check', [TmpController::class, 'deleteMemberCheck'])->name('delete.member.check');
Route::get('/mypage/delete_member/complete', [TmpController::class, 'deleteMemberComplete'])->name('delete.member.complete');
Route::get('/mypage/article_delete', [TmpController::class, 'articleDelete'])->name('article.delete');
Route::get('/mypage/article_delete/complete', [TmpController::class, 'articleDeleteComplete'])->name('article.delete.complete');