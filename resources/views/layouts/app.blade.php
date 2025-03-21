@php use Illuminate\Support\Facades\Auth; @endphp
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="csrf-param" content="_token" />
</head>
<body>
<div class="container mt-4">
    <?php
    if (Auth::check()) { ?>
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Главная</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('goods.index') }}">Товары</a>
        </li>
    </ul>
        <?php
    } ?>

    <span class="navbar-text">
    @guest
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">Вход</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">Регистрация</a>
            </li>
        </ul>
    @endguest

    @auth
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
        <a class="nav-link" href="{{ route('logout') }}"
           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            Выйти
        </a>
    @endauth
    <h1></h1>
    <div>
        @yield('content')
    </div>
        </span>
</div>
</body>
</html>
