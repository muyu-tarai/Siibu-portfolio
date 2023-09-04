<x-layout>
  <div class="max-width">
    <div>
      本当に記事を削除してもよろしいですか？
    </div>
    <form action="/mypage/article_delete/{{ $article_id }}/complete" method="GET">
      <input type="submit">
    </form>
  </div>
</x-layout>