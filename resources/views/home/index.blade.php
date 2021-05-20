<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        body{
            margin: 0;
            padding: 0;
            font-family: sans-serif;
            background: url(images/index.jpg)  no-repeat center 0px;
            background-size: cover;
            background-position: center 0;
            background-repeat: no-repeat;
            background-attachment: fixed;
            -webkit-background-size: cover;
            -o-background-size: cover;
            -moz-background-size: cover;
            -ms-background-size: cover;

        }

       .center-block {
           display: block;
           margin-left: auto;
           margin-right: auto;
       }
    </style>

    <title>Carnival_Booking_System</title>

</head>
<body class="antialiased">
    <div class="center-block">
        <h1>Carnival Booking System</h1>
        @if (Route::has('login'))
            <div class="center-block">
                @auth
                    <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700">Log in</a>

                    @if (Route::has('register'))
                        <br> <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700">Register</a>
                    @endif
                @endauth
            </div>
        @endif
    </div>

</body>

</html>

