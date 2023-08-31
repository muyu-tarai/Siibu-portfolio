<x-layout>
  <div class="index-main-contents">
    <div class="mypage-title x-large">{{ $user_name }}さんのmyページ</div>
    <div class="some-articles">
      <article>
        <div class="article-item">
          <div class="small">
            アカウント名
          </div>
          <div class="x-small">
            2023年8月8日
          </div>
        </div>
        <div class="article-item x-large">
          HTMLが楽しすぎる
        </div>
        <div class="medium">
          HTML
        </div>
        <div class="item-group">
          <div class="medium">
            <i class="fa-solid fa-heart" style="color: #ff5757;"></i>12
          </div>
          <div class="double-buttons">
            <form method="GET">  <!-- 動作確認用！ホントはPOSTだよ！！！ -->
              <input type="submit" formaction="mypage/article_edit" value="編集">
              <input type="submit" formaction="mypage/article_delete" value="削除">
            </form>
          </div>
        </div>
      </article>
      <article>
        <div class="article-item">
          <div class="small">
            アカウント名
          </div>
          <div class="x-small">
            2023年8月8日
          </div>
        </div>
        <div class="article-item x-large">
          HTMLが楽しすぎる
        </div>
        <div class="medium">
          HTML
        </div>
        <div class="item-group">
          <div class="medium">
            <i class="fa-solid fa-heart" style="color: #ff5757;"></i>12
          </div>
          <div class="double-buttons">
            <span><button>編集</button></span>
            <span><button>削除</button></span>
          </div>
        </div>
      </article>
      <article>
        <div class="article-item">
          <div class="small">
            アカウント名
          </div>
          <div class="x-small">
            2023年8月8日
          </div>
        </div>
        <div class="article-item x-large">
          HTMLが楽しすぎる
        </div>
        <div class="medium">
          HTML
        </div>
        <div class="item-group">
          <div class="medium">
            <i class="fa-solid fa-heart" style="color: #ff5757;"></i>12
          </div>
          <div class="double-buttons">
            <span><button>編集</button></span>
            <span><button>削除</button></span>
          </div>
        </div>
      </article>
      <article>
        <div class="article-item">
          <div class="small">
            アカウント名
          </div>
          <div class="x-small">
            2023年8月8日
          </div>
        </div>
        <div class="article-item x-large">
          HTMLが楽しすぎる
        </div>
        <div class="medium">
          HTML
        </div>
        <div class="item-group">
          <div class="medium">
            <i class="fa-solid fa-heart" style="color: #ff5757;"></i>12
          </div>
          <div class="double-buttons">
            <span><button>編集</button></span>
            <span><button>削除</button></span>
          </div>
        </div>
      </article>
      <article>
        <div class="article-item">
          <div class="small">
            アカウント名
          </div>
          <div class="x-small">
            2023年8月8日
          </div>
        </div>
        <div class="article-item x-large">
          HTMLが楽しすぎる
        </div>
        <div class="medium">
          HTML
        </div>
        <div class="item-group">
          <div class="medium">
            <i class="fa-solid fa-heart" style="color: #ff5757;"></i>12
          </div>
          <div class="double-buttons">
            <span><button>編集</button></span>
            <span><button>削除</button></span>
          </div>
        </div>
      </article>
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
        3
        <div>
          いいねされた数
        </div>
        <div>
          10
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