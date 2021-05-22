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
       .container {
           padding: 30px;
       }
    </style>

    <title>Dashboard</title>

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
            <div style="width:100%;" class="center-block">
                <div class="form-inline">
                    <div class="form-group">
                        <h3>The Carnival lasts for {{$GLOBALS['conf']['CARNIVAL_DAYS']}} days, today is Day{{$GLOBALS['conf']['CURRENT_DAY']}}.</h3>
                    </div>
                    <div class="form-group" style="margin-left: 140px">
                        <button onclick="location.replace('/dashboard/reserve')" class="btn btn-primary">New Reservation</button>
                    </div>
                </div>
            </div>
            <table class="table table-bordered table-hover text-center" style="margin-top:30px;">
                <thead>
                <tr class="active">
                    <th class="text-center">Reservation Date</th>
                    <th class="text-center">Invitation Code</th>
                    <th class="text-center" style="width: 90px;">Status</th>
                </tr>
                </thead>
                <tbody>
                @if(empty($reservationInfo->toArray()))
                    <tr>
                        <td colspan="3">No Reservation Yet.</td>
                    </tr>
                @else
                    @foreach ($reservationInfo as $rsv)
                        <tr>
                            <td>Day{{$rsv->reserve_date_at}}</td>
                            <td>{{$rsv->invitation}}</td>
                            @if($cuDay>$rsv->reserve_date_at)
                                <td class="danger">Passed</td>
                            @elseif($rsv->checkin==1)
                                <td class="success">Verified</td>
                            @else
                                <td><button class="btn btn-danger" onclick="location.replace('/reservation/cancel?ivtcd={{$rsv->invitation}}')">Cancel</button></td>
                            @endif
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
        {{--test data--}}
{{--                    <p>--}}
{{--                        @php--}}
{{--                            //dump($reservationInfo);--}}
{{--                            if (empty($reservationInfo->toArray())){--}}
{{--                                echo 'yes';--}}
{{--                            }else{--}}
{{--                                dump($reservationInfo);--}}
{{--                            }--}}
{{--                        @endphp--}}
{{--                    </p>--}}
    </div>
</body>

</html>

