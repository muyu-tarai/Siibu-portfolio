<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticleListController extends Controller
{
  public function articleList()
  {
    $articleBuilder = DB::table('articles');
    $articles = $articleBuilder
    ->join('add_tags', 'articles.id', '=', 'add_tags.article_id')
    ->join('tags', 'tag_id', '=', 'tags.id')
    ->join('users', 'user_id', '=', 'users.id')
    ->select('articles.id as article_id', 'users.name as user_name', 'tags.name as tag_name', 'articles.created_at as article_created_at', 'title', 'number_of_likes')
    ->orderBy('article_created_at', 'desc')
    ->get();

    $relatedTags=[];
    foreach($articles as $article){
      $relatedTags[$article->article_id][] = $article->tag_name;
    }
    return view('article_list/articleList', ['articles' => $articles, 'relatedTags' => $relatedTags]);
  }
}
