@php
$complete_url = "/article_submission/complete";
$back_url = "/article_submission";
$submissionWord = "投稿";
@endphp
<x-check :title=$title :tags=$tags :text=$text :goUrl=$complete_url :selectedWord=$submissionWord :backUrl=$back_url />