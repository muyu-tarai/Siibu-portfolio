<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class ArticleEditController extends Controller
{
    public function articleEdit($articleId)
    {
        $tags = DB::table('tags')
        ->get();

        $article = DB::table('articles')
        ->join('add_tags', 'articles.id', '=', 'add_tags.article_id')
        ->select('title', 'text', 'tag_id')
        ->where('articles.id', $articleId)
        ->get();

        $title = $article[0]->title;
        $text = $article[0]->text;
        foreach($article as $everyArticle){
            $checkedTags[] = $everyArticle->tag_id;
        }

        return view('mypage/article_edit/articleEdit', ['title'=>$title,'text'=>$text, 'checkedTags'=>$checkedTags, 'tags'=>$tags]);
    }

    public function articleEditCheck(Request $request)
    {
        dd($request->input('id'));
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
        return view('mypage/article_edit/articleEditCheck', ['title' => $request->input('title'), 'text' => $request->input('text'), 'tags' => $tagNames, 'article_id' => $request->input('id')]);
    }

    public function articleEditComplete(Request $request)
    {
        dd($request);
        $user = Auth::user();
        $lastId = DB::table('articles')
        ->where('id')
        ([
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

        return view('mypage/article_edit/articleEditComplete');
    }
}
