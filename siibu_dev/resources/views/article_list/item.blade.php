<x-layout>
  <div class="index-main-contents article-page">
    @php
    $accessSource = "item";
    @endphp
    <x-display :articles="$articles" :relatedTags="$relatedTags" :accessSource="$accessSource" />
  </div>
</x-layout>