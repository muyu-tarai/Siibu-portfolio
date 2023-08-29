<x-layout>
  <div class="index-main-contents">
    <x-searchingBox />
    <div class="large">
      {{ $searchingWord }}&nbsp;を含む記事の検索結果({{ $articleCount }}件)
    </div>
    <x-display :articles="$articles" :relatedTags="$relatedTags" />
  </div>
  <x-tagArea />
</x-layout>