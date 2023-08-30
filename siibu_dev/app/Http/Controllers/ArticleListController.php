<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticleListController extends Controller
{
  public $relatedTags = [];
  public $articles;
  public function articleList()
  {
    $this->articles = DB::table('articles')
      ->join('add_tags', 'articles.id', '=', 'add_tags.article_id')
      ->join('tags', 'tag_id', '=', 'tags.id')
      ->join('users', 'user_id', '=', 'users.id')
      ->select('articles.id as article_id', 'users.name as user_name', 'tags.name as tag_name', 'articles.created_at as article_created_at', 'title', 'number_of_likes')
      ->orderBy('article_created_at', 'desc')
      ->get();

    foreach ($this->articles as $article) {
      $this->relatedTags[$article->article_id][] = $article->tag_name;
    }
    return view('article_list/articleList', ['articles' => $this->articles, 'relatedTags' => $this->relatedTags]);
  }
  
  public function tagSearchArticle($tagId)
  {
    $getTagName = DB::table('tags')
    ->select('name')
    ->where('id', $tagId)
    ->get();
    
    $searchedArticles = DB::table('articles')
    ->join('add_tags', 'articles.id', '=', 'add_tags.article_id')
    ->select('articles.id')
    ->where('tag_id', $tagId)
    ->get();
    
    foreach ($searchedArticles as $article) {
      $articleIds[] = $article->id;
    }
    
    $this->articles = DB::table('articles')
    ->join('add_tags', 'articles.id', '=', 'add_tags.article_id')
    ->join('tags', 'tag_id', '=', 'tags.id')
    ->join('users', 'user_id', '=', 'users.id')
    ->select('articles.id as article_id', 'users.name as user_name', 'tags.name as tag_name', 'articles.created_at as article_created_at', 'title', 'number_of_likes')
    ->whereIn('article_id', isset($articleIds) ? $articleIds : [])
    ->orderBy('article_created_at', 'desc')
    ->get();
    
    foreach ($this->articles as $article) {
      $this->relatedTags[$article->article_id][] = $article->tag_name;
    }
    return view('article_list/tagSearchArticle', ['articles' => $this->articles, 'relatedTags' => $this->relatedTags, 'tagName' => $getTagName[0]->name, 'articleCount' => count($searchedArticles)]);
  }
  
  public function wordSearchArticle(Request $request)
  {
    
    $this->articles = DB::table('articles')
    ->join('add_tags', 'articles.id', '=', 'add_tags.article_id')
    ->join('tags', 'tag_id', '=', 'tags.id')
    ->join('users', 'user_id', '=', 'users.id')
    ->select('articles.id as article_id', 'users.name as user_name', 'tags.name as tag_name', 'articles.created_at as article_created_at', 'title', 'number_of_likes')
    ->where('title','like','%'.$request->input('searchingWord').'%')
    ->orWhere('text','like', '%' . $request->input('searchingWord') . '%')
    ->orderBy('article_created_at', 'desc')
    ->get();

    foreach ($this->articles as $article) {
      $this->relatedTags[$article->article_id][] = $article->tag_name;
    }

    return view('article_list/wordSearchArticle', ['articles' => $this->articles, 'relatedTags' => $this->relatedTags,'searchingWord' => $request->input('searchingWord'),'articleCount' => count($this->relatedTags)]);
  }

  public function item($articleId)
  {
    $this->articles = DB::table('articles')
    ->join('add_tags', 'articles.id', '=', 'add_tags.article_id')
    ->join('tags', 'tag_id', '=', 'tags.id')
    ->join('users', 'user_id', '=', 'users.id')
    ->select('articles.id as article_id', 'users.name as user_name', 'tags.name as tag_name', 'articles.created_at as article_created_at', 'title', 'text', 'number_of_likes')
    ->where('articles.id', $articleId)
    ->orderBy('article_created_at', 'desc')
    ->get();

    foreach ($this->articles as $article) {
      $this->relatedTags[$article->article_id][] = $article->tag_name;
    }

    return view('article_list/item', ['articles' => $this->articles, 'relatedTags' => $this->relatedTags]);
  }
}