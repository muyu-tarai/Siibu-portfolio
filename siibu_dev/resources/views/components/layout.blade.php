<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Siibu</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel="stylesheet" href="/css/style.css">
  <script src="https://kit.fontawesome.com/66cf41360e.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
  <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>
  <div class="header">
    <header>
      <nav class="navbar">
        <a class="header_title x-large" href="/article_list">Siibu</a>
        <div class="header-right medium">
          <a class="header_mypage" href="/mypage">myページ</a>
          <a class="header_submit" href="/article_submission">投稿する</a>
          <form method="POST" action="{{ route('logout') }}">
            @csrf
            <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                  this.closest('form').submit();">
              ログアウト
            </x-dropdown-link>
          </form>
        </div>
      </nav>
    </header>
  </div>
  <main class="main">
    {{$slot}}
  </main>
  <div class="footer">
    <footer>
      <div class="medium">
        Siibu
      </div>
      <div class="x-small">
        © 2023 Siib Inc
      </div>
    </footer>
  </div>
</body>

</html>