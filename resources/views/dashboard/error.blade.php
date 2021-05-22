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

    <title>Error</title>

</head>
<body class="antialiased">
{{--    top navbar--}}
<nav class="navbar navbar-default"
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav" aria-expanded="false">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="JavaScript:void(0)">
                <b>Error</b>
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="nav">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="/dashboard">Reservation</a>
                </li>
                <li>
                    <a href="/dashboard/checkin">Check in</a>
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
            @if(isset($rba)&&$rba==1)
                <h4>A required parameter is missing! Please try again.</h4> <br>
            @endif
            @if(isset($auth)&&$auth==1)
                <h4>Unauthenticated user! Please log in and try again.</h4> <br>
            @endif
            @if(isset($aldHave)&&$aldHave==1)
                <h4>You have already booked the activities of the day, and you cannot make repeated reservations.</h4> <br>
            @endif
            @if(isset($fullRsv)&&$fullRsv==1)
                <h4>Sorry, the number of people reserved for that day is full, please choose another date.</h4> <br>
            @endif
            @if(isset($loseParam)&&$loseParam==1)
                <h4>Some required parameters are missing! Please try again.</h4> <br>
            @endif
            @if(isset($dontHave)&&$dontHave==1)
                <h4>The invitation code does not exist.</h4> <br>
            @endif
            @if(isset($wrongPwd)&&$wrongPwd==1)
                <h4>The entered password is incorrect.</h4> <br>
            @endif
            @if(isset($notMatch)&&$notMatch==1)
                <h4>The invitation code does not belong to you.</h4> <br>
            @endif
            @if(isset($haveVerified)&&$haveVerified==1)
                <h4>The invitation code has been verified.</h4> <br>
            @endif
            @if(isset($succeed))
                <h4>{{$succeed}}</h4> <br>
                <script>
                    $('b').text('Succeed');
                </script>
            @endif
            <h4 id="dynamic">Return to the dashboard in 5 seconds.</h4>
        </div>
    </div>
</div>
</body>

</html>
<script>
    function Countdown(){
        sec--;
        if(sec === 0){
            $("#dynamic").text("Good bye.");
        }else{
            $("#dynamic").text("Return to the dashboard in "+sec+" seconds.");
        }
    }
    var sec = 5;
    var time = setInterval("Countdown()",1000);

    $(document).ready(function () {
        setTimeout(function(){
            location.href = "/dashboard";
        },5000);
    });
</script>

