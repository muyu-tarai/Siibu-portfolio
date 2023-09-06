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
      @if(!isset($accessSource))
      {{ $article->title }}
      @elseif($accessSource == "mypage")
      <a href="/mypage/item/{{ $article->article_id }}">{{ $article->title }}</a>
      @elseif($accessSource == "list")
      <a href="/article_list/item/{{ $article->article_id }}">{{ $article->title }}</a>
      @endif
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
    {{ $slot }}
    @if(isset($article->text))
    <div class="text-area medium">
      {!! nl2br(htmlspecialchars($article->text)) !!}
    </div>
    @endif
    @endif
    @php
    $prevArticleId = $article->article_id;
    @endphp
  </article>
  @endforeach
</div>