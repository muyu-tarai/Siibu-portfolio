<article>
  <div class="article-item">
    <div class="small">
      {{ $articles->user_name }}
    </div>
    <div class="x-small">
      {{ $articles->article_created_at }}
    </div>
  </div>
  <div class="article-item x-large">
    <a href="/article_list/item">{{ $article->title }}</a>
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