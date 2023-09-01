<x-layout>
  <div class="index-main-contents">
    @php
    foreach ($articles as $article){
    $articleId[] = $article->article_id;
    $numberOfArticle = count((array_unique($articleId)));
    }
    @endphp
    <div class="mypage-title x-large">{{ $user_name }}さんのmyページ</div>
    <div class="some-articles">
      <div class="index-main-contents">
        <x-display :articles="$articles" :relatedTags="$relatedTags">
          <form method="GET">
            @csrf
            <div class="double-buttons">
              <span><input type="submit" formaction="/mypage/article_edit/{{ $article }}" value="編集"></span>
              <span><input type="submit" formaction="" value="削除"></span>
            </div>
          </form>
        </x-display>
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