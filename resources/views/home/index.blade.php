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
           width: 30%;
           display: block;
           margin-left: auto;
           margin-right: auto;
       }

       .back-box{
           width:300px;height:310px;padding: 1px 40px;background-color: rgba(255, 255, 255, 0.55);border-radius:20px;
       }

       .item-box{
           width: 100px;
           margin-top: 100px;
           margin-bottom: auto;
       }
    </style>

    <title>Carnival_Booking_System</title>

</head>
<body class="antialiased">
    <div class="center-block">
        <h1>Carnival Booking System</h1>
        @if (Route::has('login'))
            <div class="back-box">
                <div class="item-box">
                    @auth
                        <ul> <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700">Dashboard</a> </ul>
                    @else
                        <ul> <a href="{{ route('login') }}" class="text-sm text-gray-700">Log in</a> </ul>

                        @if (Route::has('register'))
                            <ul> <a href="{{ route('register') }}" class="text-sm text-gray-700">Register</a> </ul>
                        @endif
                    @endauth
                </div>
            </div>
        @endif
    </div>

</body>

</html>

