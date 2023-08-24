<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticleListController extends Controller
{
  public $relatedTags = [];
  public $articleBuilder;
  public $articles;
  public function articleList()
  {
    $this->articleBuilder = DB::table('articles');
    $this->articles = $this->articleBuilder
    ->join('add_tags', 'articles.id', '=', 'add_tags.article_id')
    ->join('tags', 'tag_id', '=', 'tags.id')
    ->join('users', 'user_id', '=', 'users.id')
    ->select('articles.id as article_id', 'users.name as user_name', 'tags.name as tag_name', 'articles.created_at as article_created_at', 'title', 'number_of_likes')
    ->orderBy('article_created_at', 'desc')
    ->get();
    
    foreach($this->articles as $article){
      $this->relatedTags[$article->article_id][] = $article->tag_name;
    }
    return view('article_list/articleList', ['articles' => $this->articles, 'relatedTags' => $this->relatedTags]);
  }
  
  public function tagSearchArticle($tagId)
  {
    dd($tagId);
    return view('article_list/tagSearchArticle');
  }
}
