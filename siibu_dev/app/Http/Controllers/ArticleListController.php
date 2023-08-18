<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleListController extends Controller
{
  public function articleList()
  {
    return view('article_list/articleList');
  }
}
