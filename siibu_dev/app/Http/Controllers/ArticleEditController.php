<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticleEditController extends Controller
{
    public function articleEdit(Request $request)
    {
        $tags = DB::table('tags')
        ->get();
        $article = DB::table('articles')
        ->join('add_tags', 'articles.id', '=', 'add_tags.article_id')
        ->select('title','text','tag_id')
        ->where('articles.id',$request->article_id)
        ->get();
        foreach($article as $everyTag){
        $theTags[] = $everyTag->tag_id;
        }
        return view('mypage/article_edit/articleEdit', ['tags' => $tags, 'title' => $article[0]->title, 'text' => $article[0]->text, 'theTags' => $theTags]);
    }

    public function articleEditCheck()
    {
        return view('mypage/article_edit/articleEditCheck');
    }

    public function articleEditComplete()
    {
        return view('mypage/article_edit/articleEditComplete');
    }
}
