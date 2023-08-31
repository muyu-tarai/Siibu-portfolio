<x-layout>
  <div class="max-width">
    <div class="article-title large">
      <div>
        記事タイトル
      </div>
      <form action="/article_submission/complete" method="post">
        {{ csrf_field() }}
        <div>
          {{ $title }}
        </div>
    </div>
    <div class="article-tag medium">
      <div>
        タグ
      </div>
      @foreach($tags as $tag)
      <span>{{ $tag->name }}</span>
      <input type="hidden" value="{{ $tag->id }}" name="tags[]">
      @endforeach
    </div>
    <div class="article-text medium">
      <div>
        本文
      </div>
      <div>
        {{ $text }}
      </div>
    </div>
    <div>
      <input type="hidden" value="{{ $title }}" name="title">
      <input type="hidden" value="{{ $text }}" name="text">
    </div>
    <div>
      <input type="submit" value="投稿する">
      <button><a href="/article_submission">投稿画面へ</a></button>
    </div>
      </form>
  </div>
</x-layout>