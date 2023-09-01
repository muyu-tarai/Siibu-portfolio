<x-layout>
  <div class="index-main-contents article-page">
    <x-display :articles="$articles" :relatedTags="$relatedTags" />
    <form method="GET">
      @csrf
      <div class="double-buttons">
        <span><input type="submit" formaction="/mypage/article_edit/{{ $articles[0]->article_id }}" value="編集"></span>
        <span><input type="submit" formaction="" value="削除"></span>
        <input type="hidden" >
      </div>
    </form>
  </div>
</x-layout>