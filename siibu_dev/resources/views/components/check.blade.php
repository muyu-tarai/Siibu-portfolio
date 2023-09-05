<x-layout>
  <div class="max-width">
    <div class="article-title large">
      <div>
        記事タイトル
      </div>
      <form method="POST">
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
      <input type="submit" formaction="{{ $goUrl }}" value="{{ $selectedWord }}する">
      <input type="submit" formaction="{{ $backUrl }}" value="{{ $selectedWord }}画面へ戻る">
      <input type="hidden" value="{{ isset($articleId) ? $articleId : '' }}" name="article_id">
    </div>
    </form>
  </div>
</x-layout>