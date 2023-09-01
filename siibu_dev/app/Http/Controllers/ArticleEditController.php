<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticleEditController extends Controller
{
    public function articleEdit()
    {
        $article = DB::table('articles')
        ->join('add_tags', 'articles.id', '=', 'add_tags.article_id')
        ->select('title', 'text', 'tag_id')
        ->where('articles.id', $selectedArticle)
        ->get();
        return view('mypage/article_edit\articleEdit');
    }

    public function articleEditCheck()
    {
        return view('mypage/articleEditCheck');
    }

    public function articleEditComplete()
    {
        return view('mypage/articleEditComplete');
    }
}
