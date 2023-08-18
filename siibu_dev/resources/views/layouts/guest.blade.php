<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <!-- <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" /> -->

    <!-- Scripts -->
    <!-- @vite(['resources/css/app.css', 'resources/js/app.js']) -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="stylesheet" href="/css/style.css">
</head>

<body class="font-sans text-gray-900 antialiased">
    <div class="header">
        <header>
            <nav class="navbar">
                <a class="header_title x-large" href="/login">Siibu</a>
                <div class="header-right">
                    <a class="header_mypage medium" href="/">ログイン</a>
                    <a class="header_submit medium" href="/register">新規登録</a>
                </div>
            </nav>
        </header>
    </div>
    <div class="user-operation-main min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
        <div>
        </div>

        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            {{ $slot }}
        </div>
    </div>
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