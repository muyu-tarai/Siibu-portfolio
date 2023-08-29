<x-layout>
  <div class="index-main-contents">
    <x-searchingBox />
    <div class="large">
      タグ:&nbsp;{{ $tagName }}&nbsp;での検索結果({{ $articleCount }}件)
    </div>
    <x-display :articles="$articles" :relatedTags="$relatedTags" />
  </div>
  <x-tagArea />
</x-layout>