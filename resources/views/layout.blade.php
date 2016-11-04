<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link href="css/style.css" rel="stylesheet" type="text/css" media="all">
        <link rel="shortcut icon" href="favicon.png">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Save money, buy together! | Group Buys</title>

    </head>
    <body>
        <!--<img src="img/logo.png" alt="logo" class="logo">-->
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Group Buys
                </div>
                <div class="links">
                    <a href="/">Home</a>
                    <a href="/group-buys">Group Buys</a>
                    <a href="http://steamcommunity.com/groups/groupbuys/discussions" target="_blank">Forum</a>
                    <a href="/announcements">Announcements</a>
                    <a href="/rules">Rules</a>
                    <a href="/contact">Contact</a>
                </div>

                <div class="wrapper">

                    <main>

                        @yield('content')

                    </main>

                </div>

                <footer class="site-footer">
                    <p>&copy; Group Buys 2016</p>
                </footer>

            </div>
        </div>
    </body>
</html>
