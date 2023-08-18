<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleListController;
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
    return view('article_list/index');
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

Route::get('/article_list', [ArticleListController::class, 'index'])->name('article.list.index');
Route::get('/article_list/word_search', [ArticleListController::class, 'wordSearchArticle'])->name('word.search.article.index');
Route::get('/article_list/tag_search', [ArticleListController::class, 'tagSearchArticle'])->name('tag.search.article.index');
Route::get('/mypage', [ArticleListController::class, 'mypage'])->name('mypage.index');
Route::get('/mypage/favorite_list', [ArticleListController::class, 'favoriteArticle'])->name('favorite.article.index');
Route::get('/article_submission', [ArticleListController::class, 'articleSubmission'])->name('article.submission.index');
Route::get('/article_submission/check', [ArticleListController::class, 'articleSubmissionCheck'])->name('article.submission.check.index');
Route::get('/article_submission/complete', [ArticleListController::class, 'articleSubmissionComplete'])->name('article.submission.complete.index');
Route::get('/mypage/article_edit', [ArticleListController::class, 'articleEdit'])->name('article.edit.index');
Route::get('/article_submission/check', [ArticleListController::class, 'articleSubmissionCheck'])->name('check.submission.index');
Route::get('/mypage/article_edit/check', [ArticleListController::class, 'articleEditCheck'])->name('article.edit.check.index');
Route::get('/mypage/article_edit/complete', [ArticleListController::class, 'articleEditComplete'])->name('article.edit.complete.index');
Route::get('/mypage/delete_member', [ArticleListController::class, 'deleteMember'])->name('delete.member.index');
Route::get('/mypage/delete_member/check', [ArticleListController::class, 'deleteMemberCheck'])->name('delete.member.check.index');
Route::get('/mypage/delete_member/complete', [ArticleListController::class, 'deleteMemberComplete'])->name('delete.member.complete.index');
Route::get('/mypage/article_delete', [ArticleListController::class, 'articleDelete'])->name('article.delete.index');
Route::get('/mypage/article_delete/complete', [ArticleListController::class, 'articleDeleteComplete'])->name('article.delete.complete.index');