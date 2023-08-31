<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class ArticleSubmissionController extends Controller
{
    public function articleSubmission()
    {
        $tags = DB::table('tags')
            ->get();
        return view('article_submission/articleSubmission', ['tags' => $tags]);
    }

    public function articleSubmissionCheck(Request $request)
    {
        foreach ($request->input('tags') as $tag) {
            $tags[] = DB::table('tags')
                ->select('id', 'name')
                ->where('id', $tag)
                ->get();
        }
        foreach ($tags as $tmp) {
            foreach ($tmp as $tag) {
                $tagNames[] = $tag;
            }
        }
        return view('article_submission/articleSubmissionCheck', ['title' => $request->input('title'), 'text' => $request->input('text'), 'tags' => $tagNames]);
    }

    public function articleSubmissionComplete(Request $request)
    {
        $user = Auth::user();
        $lastId = DB::table('articles')
            ->insertGetId([
                'user_id' => $user->id,
                'title' => $request->input('title'),
                'text' => $request->input('text'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);

        foreach ($request->input('tags') as $tag) {
            DB::table('add_tags')
                ->insert([
                    'article_id' => $lastId,
                    'tag_id' => $tag
                ]);
        }

        return view('article_submission/articleSubmissionComplete');
    }
}
