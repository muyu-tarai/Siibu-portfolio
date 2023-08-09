<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleListController extends Controller
{
    public function index()
    {
        return view('article/index');
    }

    public function wordSearchArticle()
    {
        return view('article/wordSearchArticle');
    }

    public function tagSearchArticle()
    {
        return view('article/tagSearchArticle');
    }

    public function favoriteArticle()
    {
        return view('mypage/favoriteArticle');
    }
}
