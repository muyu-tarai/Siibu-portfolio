<x-layout>
  <div class="index-main-contents">
    <x-searchingBox />
    <div class="some-articles">
      @php
      $prevArticleId = '';
      @endphp
      @foreach($articles as $article)
      @if($article->article_id != $prevArticleId)
      <article>
        <div class="article-item">
          <div class="small">
            {{ $article->user_name }}
          </div>
          <div class="x-small">
            {{ $article->article_created_at }}
          </div>
        </div>
        <div class="article-item x-large">
          {{ $article->title }}
        </div>
        <div class="medium">
          @foreach($relatedTags[$article->article_id] as $relatedTag)
          {{ $relatedTag }}
          @endforeach
        </div>
        <div class="medium">
          <i class="fa-solid fa-heart" style="color: #ff5757;"></i>
          {{ $article->number_of_likes }}
        </div>
        @endif
        @php
        $prevArticleId = $article->article_id;
        @endphp
      </article>
      @endforeach
      <!-- <article> -->
      <!-- <div class="article-item">
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
        <div class="medium">
          <i class="fa-solid fa-heart" style="color: #ff5757;"></i>12
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
        <div class="medium">
          <i class="fa-solid fa-heart" style="color: #ff5757;"></i>12
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
        <div class="medium">
          <i class="fa-solid fa-heart" style="color: #ff5757;"></i>12
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
        <div class="medium">
          <i class="fa-solid fa-heart" style="color: #ff5757;"></i>12
        </div>
      </article> -->
      <!-- <div class="medium changing-page">
        1/3 >
      </div> -->
    </div>
  </div>
  <x-tagArea />
</x-layout>