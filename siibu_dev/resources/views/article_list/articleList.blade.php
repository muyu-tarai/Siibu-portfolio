<x-layout>
  <div class="index-main-contents">
    <x-searchingBox />
    <div class="some-articles">
      <article>
        <div class="article-item">
          @foreach($articles as $article)
          <div class="small">
            {{ $article->user_id }}
          </div>
          <div class="x-small">
            {{ $article->created_at }}
          </div>
        </div>
        <div class="article-item x-large">
          {{ $article->title }}
        </div>
        <div class="medium">
          HTML
        </div>
        <div class="medium">
          <i class="fa-solid fa-heart" style="color: #ff5757;"></i>
          {{ $article->number_of_likes }}
        </div>
        {{ dd($articles); }}
        @endforeach
      </article>
      <!-- <article>
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
      <div class="medium changing-page">
        1/3 >
      </div>
    </div>
  </div> -->
    <x-tagArea />
</x-layout>