<x-layout>
  <div class="index-main-contents">
    <div class="mypage-title x-large">{{ $user_name }}さんのmyページ</div>
    <div class="some-articles">
      @php
      $prevArticleId = '';
      @endphp
      @foreach($articles as $article)
      @php
      $articleId[] = $article->article_id;
      @endphp
      @if($article->article_id != $prevArticleId)
      <div class="index-main-contents">
        <x-display :article="$article" :relatedTags="$relatedTags">
          <form method="POST">
            @csrf
            <div class="double-buttons">
              <span><input type="submit" formaction="/mypage/article_edit" value="編集"></span>
              <span><input type="submit" formaction="" value="削除"></span>
              <input type="hidden" value="{{ $article->article_id }}" name="article_id">
            </div>
          </form>
        </x-display>
      </div>
      @php
      $prevArticleId = $article->article_id;
      @endphp
      @endif
      @endforeach
      <div class="medium changing-page">
        1/3 >
      </div>
    </div>
  </div>
  <div class="index-sidebar">
    <div class="index-sidebar-inner medium">
      <div>
        投稿記事
      </div>
      <div>
        {{ $numberOfArticle = count((array_unique($articleId))) }}
        {{ $numberOfArticle }}
        <div>
          いいねされた数
        </div>
        <div>
          {{ $sum_likes }}
        </div>
        <div>
          <a href="/mypage/favorite_list">お気に入り記事一覧</a>
        </div>
      </div>
    </div>
    <div class="delete-link small">
      <a href="mypage/delete_member">メンバーを退会する</a>
    </div>
  </div>
</x-layout>