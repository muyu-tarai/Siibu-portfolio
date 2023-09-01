<x-layout>
  <div class="max-width">
    <form action="/mypage/article_edit/check" method="POST">
      @csrf
      <input type="text" placeholder="記事タイトル" class="input-box" value="{{ $title }}" name="title">
      <div class="tag-select-area">
        <div class="small">記事に付けるタグを選択できます</div>
        @foreach($tags as $tag)
        <label class="small">
          <input type="checkbox" value="{{ $tag->id }}" name="tags[]" <?php if (!empty($tags) && in_array($tag->id, $checkedTags)) echo 'checked'; ?>>{{ $tag->name }}
        </label>
        @endforeach
      </div>
      <textarea rows="27" placeholder="本文" class="input-box" name="text">{{ $text }}</textarea>
      <input type="submit" value="編集内容確認へ">
      <button><a href="/mypage">myページに戻る</a></button>
    </form>
  </div>
</x-layout>