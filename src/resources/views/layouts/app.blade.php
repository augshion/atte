<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>atte</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
     <link rel="stylesheet" href="{{ asset('css/common.css') }}" />
    @yield('css')
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <a href="/" class="header__logo">
                Atte
            </a>
        </div>
        <ul class="header__menu">
                @if (Auth::check())
                <li class="header__nav">
                    <a href="/" class="header__link">
                        ホーム
                    </a>
                </li>
                <li class="header__nav">
                    <a href="/attendance" class="header__link">
                        日付一覧
                    </a>
                </li>
                <li class="header__nav">
                    <form action="/logout" method="post">
                        @csrf
                        <button class="header__button">ログアウト</button>
                    </form>
                </li>
                @endif
            </ul>
        </div>   
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="footer">
        <div class="footer__inner">
            <p class="footer__small"><small>Atte,inc.</small></p>
        </div>
    </footer>
</body>

</html>