<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ArticleEditController extends Controller
{
    public function articleEdit($articleId)
    {
        $tags = DB::table('tags')
            ->get();

        $article = DB::table('articles')
            ->join('add_tags', 'articles.id', '=', 'add_tags.article_id')
            ->select('title', 'text', 'tag_id', 'articles.id')
            ->where('articles.id', $articleId)
            ->get();
        $title = $article[0]->title;
        $text = $article[0]->text;
        foreach ($article as $everyArticle) {
            $checkedTags[] = $everyArticle->tag_id;
        }

        return view('mypage/article_edit/articleEdit', ['title' => $title, 'text' => $text, 'checkedTags' => $checkedTags, 'tags' => $tags, 'article_id' => $article[0]->id]);
    }

    public function returnArticleEdit(Request $request)
    {
        $tags = DB::table('tags')
            ->get();

        $title = $request->title;
        $text = $request->text;
        $checkedTags = $request->tags;
        return view('mypage/article_edit/articleEdit', ['tags' => $tags, 'title' => $title, 'text' => $text, 'checkedTags' => $checkedTags, 'article_id' => $request->article_id]);
    }

    public function articleEditCheck(Request $request)
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
        return view('mypage/article_edit/articleEditCheck', ['title' => $request->input('title'), 'text' => $request->input('text'), 'tags' => $tagNames, 'article_id' => $request->input('article_id')]);
    }

    public function articleEditComplete(Request $request)
    {
        DB::table('articles')
            ->where('id', $request->article_id)
            ->update([
                'title' => $request->title,
                'text' => $request->text,
                'updated_at' => Carbon::now()
            ]);

        DB::table('add_tags')
        ->where('article_id', $request->article_id)
        ->delete();

        foreach ($request->tags as $tag) {
            DB::table('add_tags')
                ->insert([
                    'article_id' => $request->article_id,
                    'tag_id' => $tag
                ]);
        }

        return view('mypage/article_edit/articleEditComplete');
    }
}
