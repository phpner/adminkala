<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', "Админ панель") }}
                </a>

            </div>


            <div class="collapse navbar-collapse" id="app-navbar-collapse">
            @auth
                <!-- Left Side Of Navbar -->
                <ul class="topmenu nav  navbar-nav">
                    <li><a href="/admin">Главная админка</a></li>
                    <li class="active"><a href="/admin/pages">Посты</a></li>
                    <li><a href="/admin/users">Пользователи</a></li>
                </ul>
                @endauth

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @guest
                        <li><a href="{{ route('login') }}">Войти</a></li>
                        <li><a href="{{ route('register') }}">Регистрация</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="/logout"
                                           onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                            Выход
                                        </a>

                                        <form id="logout-form" action="/logout" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                            @endguest
                </ul>
            </div>
        </div>
    </nav>
    @yield('content')
</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/lib.js') }}"></script>
<script>
    $(function () {
        var href = document.location.pathname;

        $('.topmenu li a').each(function () {

            if ($(this).attr('href') == href )
            {
                $(this).parent().addClass('active');
            }else {
                $(this).parent().removeClass('active');
            }

        });
    })

</script>
</body>
</html>
