<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use function PHPUnit\Framework\isEmpty;

class FavoriteController extends Controller
{
    public function favorite()
    {
        $articleId = request()->get('article_id');
        $user = Auth::user();

        $likedArticle = DB::table('likes')
            ->select('article_id', 'user_id')
            ->where('article_id', $articleId)
            ->where('user_id', $user->id)
            ->get();

        if ($likedArticle->isEmpty()) {
            DB::table('likes')
                ->insert([
                    'article_id' => $articleId,
                    'user_id' => $user->id
                ]);
                return response()->json(['res' => 'added']);
        } else {
            DB::table('likes')
                ->where('article_id', $articleId)
                ->where('user_id', $user->id)
                ->delete();
                return response()->json(['res' => 'deleted']);
        }
    }
}
