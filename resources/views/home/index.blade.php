<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--jquery-->
    <script src="js/jquery.min.js"></script>
    <!-- The latest version of Bootstrap core CSS file -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- The latest Bootstrap core JavaScript file -->
    <script src="js/bootstrap.min.js"></script>

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

       .container {
           padding: 100px;
       }

       .back-box{
           width:300px;
           height:300px;
           margin-left: auto;
           margin-right: auto;
           padding: 50px 40px 50px 40px;
           background-color: rgba(255, 255, 255, 0.55);
           border-radius:20px;
       }
    </style>

    <title>Carnival_Booking_System</title>

</head>
<body class="antialiased">
    <div class="container text-center">
        <h1>Carnival Booking System</h1>
        @if (Route::has('login'))
            <div class="back-box">
                @auth
                    <a href="{{ url('/dashboard') }}" class="btn btn-primary" style="width: 70%;margin-top: 50px">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="btn btn-primary" style="width: 70%;margin-top: 30px;margin-left: 0">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn btn-info" style="width: 70%; margin-top: 50px">Register</a>
                    @endif
                @endauth
            </div>
        @endif
    </div>

</body>

</html>

