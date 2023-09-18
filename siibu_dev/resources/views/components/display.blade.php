<div class="some-articles">
  @php
  $prevArticleId = '';
  @endphp
  @foreach($articles as $article)
  @if($article->article_id != $prevArticleId)
  @php
  $a[]=$article;
  @endphp
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
      <button class="favorite" data-article-id="{{ $article->article_id }}"><i class="fa-solid fa-heart" style="color: black;"></i></button>
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
<script>
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $("[name='csrf-token']").attr("content")
    },
  })

  $('.favorite').on('click', function() {
    var article_id = $(this).data('article-id');
    var favorite = $(this);
    $.ajax({
      url: "{{ route('favorite') }}",
      method: "POST",
      data: {
        article_id: article_id
      },
      dataType: "json",
    }).done(function(res) {
      if (res.res == 'added') {
        favorite.children().css({
          'color': 'red'
        });
      } else if (res.res == 'deleted') {
        favorite.children().css({
          'color': 'black'
        });
      }
    }).fail(function() {
      console.log('エラーが発生しました')
    });
  });
</script>