<form action="{{ url('/article_list/word_search') }}" method="POST">
  {{ csrf_field() }}
  <input type="text" placeholder="記事を検索" class="input-box" name="searchingWord">
</form>