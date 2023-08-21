<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleListController extends Controller
{
  public function articleList()
  {
    $articles = Article::all();
    return view('article_list/articleList', ['articles' => $articles]);
  }
}
