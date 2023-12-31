<x-layout>
  <div class="max-width">
    <form action="article_submission/check" method="POST">
      @csrf
      <input type="text" placeholder="記事タイトル" class="input-box" name="title" value="{{ isset($title) ? $title : '' }}">
      <div class="tag-select-area">
        <div class="small">記事に付けるタグを選択できます</div>
        @foreach($tags as $tag)
        <label class="small">
          <input type="checkbox" value="{{ $tag->id }}" name="tags[]" <?php if (!empty($checkedTags) && in_array($tag->id,$checkedTags)) echo 'checked'; ?>>{{ $tag->name }}
        </label>
        @endforeach
      </div>
      <textarea rows="27" placeholder="本文" class="input-box" name="text">{{ isset($text) ? $text : '' }}</textarea>
      <input type="submit" value="投稿内容確認へ">
      <button><a href="/mypage">myページへ</a></button>
    </form>
  </div>
</x-layout>