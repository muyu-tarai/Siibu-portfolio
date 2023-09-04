@php
$complete_url = "/mypage/article_edit/$article_id/complete";
$back_url = "/mypage/article_edit/$article_id";
$editWord = "編集";
@endphp
<x-check :title=$title :tags=$tags :text=$text :articleId=$article_id :goUrl=$complete_url :selectedWord=$editWord :backUrl=$back_url />