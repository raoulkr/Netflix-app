<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}" />
        <title>{{config('app.name', 'NetflixAPP')}}</title>
    </head>

    <body>
        <nav class = "NavBar">
            <ul>
                <li class="{{ Request::is('/') ? 'active' : '' }}"><a href={{ url('/') }}>Home</a></i>
            </ul>
        </nav>
        <div class="yield">
            @yield('content')
        </div>
    </body>
</html>
