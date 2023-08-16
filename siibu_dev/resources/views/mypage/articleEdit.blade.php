<x-layout>
  <div class="max-width">
    <form action="/mypage/article_edit/check" method="GET">  <!-- 確認用！本当はPOSTだよ！ -->
      <input type="text" placeholder="記事タイトル" class="input-box" value="取得してきたタイトル">
      <div class="tag-select-area">
        <div class="small">記事に付けるタグを選択できます</div>
        <label class="small"><input type="checkbox" checked="checked" value="HTML">HTML</label>
        <label class="small"><input type="checkbox" value="CSS">CSS</label>
        <label class="small"><input type="checkbox" value="JavaScript">JavaScript</label>
        <label class="small"><input type="checkbox" value="PHP">PHP</label>
        <label class="small"><input type="checkbox" value="Laravel">Laravel</label>
        <label class="small"><input type="checkbox" value="MySQL">MySQL</label>
        <label class="small"><input type="checkbox" value="VScode">VScode</label>
        <label class="small"><input type="checkbox" value="その他">その他</label>
      </div>
      <textarea rows="27" placeholder="本文" class="input-box">取得してきた本文</textarea>
      <input type="submit" value="編集内容確認へ">
    </form>
  </div>
</x-layout>