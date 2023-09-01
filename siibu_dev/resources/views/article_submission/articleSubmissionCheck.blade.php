<x-layout>
  <div class="max-width">
    <div class="article-title large">
      <div>
        記事タイトル
      </div>
      <form action="/article_submission/complete" method="post">
        @csrf
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
        {!! nl2br(htmlspecialchars($text)) !!}
      </div>
    </div>
    <div>
      <input type="hidden" value="{{ $title }}" name="title">
      <input type="hidden" value="{{ $text }}" name="text">
    </div>
    <div>
      <input type="submit" formaction="/article_submission/complete" value="投稿する">
      <input type="submit" formaction="/article_submission" value="投稿画面へ戻る">
    </div>
    </form>
  </div>
</x-layout>