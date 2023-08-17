<x-layout>
  <div class="max-width">
    <form action="article_submission/check" method="GET"> <!-- 確認用！本当はPOSTだよ！ -->
      <input type="text" placeholder="記事タイトル" class="input-box">
      <div class="tag-select-area">
        <div class="small">記事に付けるタグを選択できます</div>
        <label class="small"><input type="checkbox" class="" value="HTML">HTML</label>
        <label class="small"><input type="checkbox" class="" value="CSS">CSS</label>
        <label class="small"><input type="checkbox" class="" value="JavaScript">JavaScript</label>
        <label class="small"><input type="checkbox" class="" value="PHP">PHP</label>
        <label class="small"><input type="checkbox" class="" value="Laravel">Laravel</label>
        <label class="small"><input type="checkbox" class="" value="MySQL">MySQL</label>
        <label class="small"><input type="checkbox" class="" value="VScode">VScode</label>
        <label class="small"><input type="checkbox" class="" value="その他">その他</label>
        <!-- 保守性を考えるなら、DBから取ってきてforeachで配置したほうがいいかも！ -->
      </div>
      <textarea rows="27" placeholder="本文" class="input-box"></textarea>
      <input type="submit" value="投稿内容確認へ">
      <button><a href="/mypage">myページへ</a></button>
    </form>
  </div>
</x-layout>