<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TmpController;
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
Route::get('/article_list/word_search', [TmpController::class, 'wordSearchArticle'])->name('word.search.article');
Route::get('/article_list/tag_search', [TmpController::class, 'tagSearchArticle'])->name('tag.search.article');
Route::get('/mypage', [TmpController::class, 'mypage'])->name('mypage');
Route::get('/mypage/favorite_list', [TmpController::class, 'favoriteArticle'])->name('favorite.article');
Route::get('/article_submission', [TmpController::class, 'articleSubmission'])->name('article.submission');
Route::get('/article_submission/check', [TmpController::class, 'articleSubmissionCheck'])->name('article.submission.check');
Route::get('/article_submission/complete', [TmpController::class, 'articleSubmissionComplete'])->name('article.submission.complete');
Route::get('/mypage/article_edit', [TmpController::class, 'articleEdit'])->name('article.edit');
Route::get('/article_submission/check', [TmpController::class, 'articleSubmissionCheck'])->name('check.submission');
Route::get('/mypage/article_edit/check', [TmpController::class, 'articleEditCheck'])->name('article.edit.check');
Route::get('/mypage/article_edit/complete', [TmpController::class, 'articleEditComplete'])->name('article.edit.complete');
Route::get('/mypage/delete_member', [TmpController::class, 'deleteMember'])->name('delete.member');
Route::get('/mypage/delete_member/check', [TmpController::class, 'deleteMemberCheck'])->name('delete.member.check');
Route::get('/mypage/delete_member/complete', [TmpController::class, 'deleteMemberComplete'])->name('delete.member.complete');
Route::get('/mypage/article_delete', [TmpController::class, 'articleDelete'])->name('article.delete');
Route::get('/mypage/article_delete/complete', [TmpController::class, 'articleDeleteComplete'])->name('article.delete.complete');