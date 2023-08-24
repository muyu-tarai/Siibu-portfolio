<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TmpController extends Controller
{


    public function wordSearchArticle()
    {
        return view('article_list/wordSearchArticle');
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

    public function articleSubmissionCheck()
    {
        return view('article_submission/articleSubmissionCheck');
    }

    public function articleEditCheck()
    {
        return view('mypage/articleEditCheck');
    }

    public function articleDelete()
    {
        return view('mypage/articleDelete');
    }

    public function articleDeleteComplete()
    {
        return view('mypage/articleDeleteComplete');
    }

    public function articleEditComplete()
    {
        return view('mypage/articleEditComplete');
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
