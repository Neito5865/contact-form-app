<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FashionablyLate</title>
    <link rel="stylesheet" href="{{asset('css/sanitize.css')}}">
    <link rel="stylesheet" href="{{asset('css/common.css')}}">
    @yield('css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inika:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <div class="header-utilities">
                <div class="header__ttl">
                    <a href="/" class="header__logo">FashionablyLate</a>
                </div>
                <nav class="nav">
                    {{-- <button class="header-nav__button-register"><a href="/register" class="header-nav__link-register">register</a>
                    </button>
                    <button class="header-nav__button-login"><a href="/login" class="header-nav__link-login">login</a>
                    </button> --}}
                    {{-- @if (Auth::check()) --}}
                    <form class="header-nav__form" action="/logout" method="post">
                    @csrf
                        <div class="header-nav__button-logout">
                            <input class="header-nav__button-submit" type="submit" value="logout">
                        </div>
                    </form>
                    {{-- @endif --}}
                </nav>
            </div>
        </div>
    </header>
    <main>
        @yield('content')
    </main>

</body>
</html>
