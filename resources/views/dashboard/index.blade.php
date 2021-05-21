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
    </style>

    <title>Dashboard</title>

</head>
<body class="antialiased">

    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav" aria-expanded="false">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="JavaScript:void(0)">
                    <b>Dashboard</b>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="nav">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="/dashboard">Reservation</a>
                    </li>
                    <li>
                        <a href="/dashboard">Check in</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="JavaScript:void(0)" style="cursor:default"> {{$cuName}} </a>
                    </li>
                    <li>
                        <a href="/logout">Log out</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <div class="container text-center">
        <h1>Dashboard</h1>
    </div>

</body>

</html>

