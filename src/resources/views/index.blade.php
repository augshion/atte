<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>atte</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>

<body>
    <header class="header">
        <div class="header__inner">

            <div class="header__title">               
                <a href="/" class="header__logo">
                    Atte
                </a>
                
                <nav>
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
                </nav>
            </div>
        </div>
    </header>

    <main>
        <div class="atte__message">
            <div class="atte__message--success">
                お疲れ様です！
            </div>
        </div>
        
        <div class="atte__content">
            <div class="content-inner">

                <div class="content-inner__top">
                    <div class="content-inner__button-wrap">
                        <div class="select__button">
                            <button class="punch-in__button-submit" type="submit">
                                勤務開始
                            </button>
                        </div>
                    </div>
                    
                    <div class="content-inner__button-wrap">
                        <div class="select__button">
                            <button class="punch-out__button-submit" type="submit">
                                    勤務終了
                             </button>
                        </div>
                    </div>
                </div>

                <div class="content-inner__bottom">
                    <div class="content-inner__button-wrap">
                        <div class="select__button">
                            <button class="break__button-submit" type="submit">
                                    休憩開始
                             </button>
                        </div>
                    </div>

                    <div class="content-inner__button-wrap">
                        <div class="select__button">
                            <button class="break-end__button-submit" type="submit">
                                休憩終了
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="footer">
        <div class="footer__inner">
            <small class="footer__small">Atte,inc.</small>
        </div>
    </footer>
</body>

</html>