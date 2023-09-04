<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleDeleteController extends Controller
{
    public function articleDelete()
    {
        return view('mypage/article_delete/articleDelete');
    }

    public function articleDeleteComplete()
    {
        return view('mypage/articleDeleteComplete');
    }
}
