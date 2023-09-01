@php
$complete_url = "/article_edit/complete";
$back_url = "/article_edit";
$editWord = "編集";
@endphp
<x-check :title=$title :tags=$tags :text=$text :goUrl=$complete_url :selectedWord=$editWord :backUrl=$back_url />