<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--jquery-->
    <script src="../js/jquery.min.js"></script>
    <!-- The latest version of Bootstrap core CSS file -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- The latest Bootstrap core JavaScript file -->
    <script src="../js/bootstrap.min.js"></script>

    <style>
        .container {
            padding: 30px;
        }

        .back-box{
            width:300px;
            height:300px;
            margin-left: auto;
            margin-right: auto;
            padding: 50px 40px 50px 40px;
            background-color: lightblue;
            border-radius:20px;
        }
    </style>

    <title>New Reservation</title>

</head>
<body class="antialiased">
{{--    top navbar--}}
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav" aria-expanded="false">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="JavaScript:void(0)">
                <b>New Reservation</b>
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
                @php
                    echo '<li> <a href="JavaScript:void(0)"> Today: Day'.$GLOBALS['conf']['CURRENT_DAY'].'</a> </li>';
                @endphp
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
{{--    reservation info--}}
<div class="container">
    <div class="container-fluid">
        <div class="back-box">
            @if($cuTtRsv>=3)
                <h3>You have had 3 reservations, to reserve another day, you need to cancel an old one.</h3>
            @elseif($ttDays==$cuDay)
                <h3>Today is the last day of the festival, please pay attention to the next event.</h3>
            @else
                <form method="POST" class="form-horizontal" action="/reservation/add">
                @csrf
                    <div class="form-group">
                        <select name="rsv_day_at" class="form-control">
                            @php
                                for($i=$cuDay+1;$i<=$ttDays;$i++){
                                 echo '<option value="'.$i.'" >Day'.$i.'</option>';
                                }
                            @endphp
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="submit" id="reserve" value="Reserve" class="btn btn-primary">
                    </div>
                </form>
            @endif
        </div>
    </div>
</div>
</body>

</html>

