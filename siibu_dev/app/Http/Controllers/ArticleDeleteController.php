<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticleDeleteController extends Controller
{
    public function articleDelete($articleId)
    {
        return view('mypage/article_delete/articleDelete', ['article_id'=>$articleId]);
    }

    public function articleDeleteComplete($articleId)
    {
        DB::table('articles')
        ->where('id', $articleId)
            ->delete();

        return view('mypage/article_delete/articleDeleteComplete');
    }
}
