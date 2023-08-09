@extends('layouts/layout')

@section('articlePageParts')
<form action="/article_list/word_search">
  <input type="text" placeholder="記事を検索" class="search-box">
</form>
@yield('content')
<div class="index-sidebar">
  <div class="index-sidebar-inner medium">
    <div>
      タグ
    </div>
    <div><a href="../article_list/tag_search">IT基礎知識</a></div>
    <div><a href="../article_list/tag_search">HTML</a></div>
    <div><a href="../article_list/tag_search">CSS</a></div>
    <div><a href="../article_list/tag_search">PHP</a></div>
    <div><a href="../article_list/tag_search">Laravel</a></div>
    <div><a href="../article_list/tag_search">MySQL</a></div>
    <div><a href="../article_list/tag_search">GitHub</a></div>
    <div><a href="../article_list/tag_search">その他</a></div>
  </div>
</div>
@endsection