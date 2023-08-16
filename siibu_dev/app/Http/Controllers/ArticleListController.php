<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleListController extends Controller
{
    public function index()
    {
        return view('article_list/index');
    }

    public function wordSearchArticle()
    {
        return view('article_list/wordSearchArticle');
    }

    public function tagSearchArticle()
    {
        return view('article_list/tagSearchArticle');
    }

    public function mypage()
    {
        return view('mypage/mypage');
    }

    public function favoriteArticle()
    {
        return view('mypage/favoriteArticle');
    }

    public function articleSubmission()
    {
        return view('article_submission/articleSubmission');
    }

    public function articleEdit()
    {
        return view('mypage/articleEdit');
    }

    public function checkSubmission()
    {
        return view('article_submission/checkSubmission');
    }

    public function checkEdit()
    {
        return view('mypage/articleEditCheck');
    }
}
