<x-layout>
  <div class="index-main-contents">
    <x-searchingBox />
    <x-display :articles="$articles" :relatedTags="$relatedTags" />
  </div>
  <x-tagArea />
</x-layout>