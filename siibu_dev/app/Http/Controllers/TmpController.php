<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TmpController extends Controller
{


    public function wordSearchArticle()
    {
        return view('article_list/wordSearchArticle');
    }

    public function favoriteArticle()
    {
        return view('mypage/favoriteArticle');
    }

    public function articleSubmissionCheck()
    {
        return view('article_submission/articleSubmissionCheck');
    }

    public function articleSubmissionComplete()
    {
        return view('article_submission/articleSubmissionComplete');
    }

    public function deleteMember()
    {
        return view('mypage/deleteMember');
    }

    public function deleteMemberCheck()
    {
        return view('mypage/deleteMemberCheck');
    }

    public function deleteMemberComplete()
    {
        return view('mypage/deleteMemberComplete');
    }
}
