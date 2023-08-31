<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class MypageController extends Controller
{
    public function mypage()
    {
        $user = Auth::user();

        $articles = DB::table('articles')
        ->join('add_tags', 'articles.id', '=', 'add_tags.article_id')
        ->join('tags', 'tag_id', '=', 'tags.id')
        ->join('users', 'user_id', '=', 'users.id')
        ->select('articles.id as article_id', 'users.name as user_name', 'tags.name as tag_name', 'articles.created_at as article_created_at', 'title', 'number_of_likes')
        ->where('user_id',$user->id)
        ->orderBy('article_created_at', 'desc')
        ->get();

        $sumLikes = 0;
        $prevArticleId = '';
        foreach ($articles as $article) {
            $relatedTags[$article->article_id][] = $article->tag_name;
            if($article->article_id != $prevArticleId){
                $sumLikes += $article->number_of_likes;
            }
            $prevArticleId = $article->article_id;
        }
        return view('mypage/mypage',['user_name'=>$user->name,'articles' => $articles, 'relatedTags' => $relatedTags, 'sum_likes'=>$sumLikes]);
    }
}
