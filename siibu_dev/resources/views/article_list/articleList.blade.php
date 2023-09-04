<x-layout>
  <div class="index-main-contents">
    <x-searchingBox />
    @php
    $accessSource = "list";
    @endphp
    <x-display :articles="$articles" :relatedTags="$relatedTags" :accessSource="$accessSource" />
  </div>
  <x-tagArea />
</x-layout>