<x-layout>
  <div class="index-main-contents">
    @php
    $numberOfArticle = 0;
    foreach ($articles as $article){
    $articleId[] = $article->article_id;
    $numberOfArticle = count((array_unique($articleId)));
    }
    $accessSource = "mypage";
    @endphp
    <div class="mypage-title x-large">{{ $user_name }}さんのmyページ</div>
    <div class="some-articles">
      <div class="index-main-contents">
        @if($articles->isEmpty())
        <div class="large complete-area">まだあなたの投稿はありません</div>
        @else
        <x-display :articles="$articles" :relatedTags="$relatedTags" :accessSource="$accessSource" />
        @endif
      </div>
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