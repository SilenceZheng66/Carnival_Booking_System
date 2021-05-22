<?php


namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function index(Request $request){
        //read configuration file.
        $GLOBALS['conf'] = require_once("config/Conf.php");
        //read current user.
        $currentUser = Auth::user();
        //grab current user reservation info
        $data = Reservation::where('email',$currentUser['email'])->orderBy('reserve_date_at','desc')->get();

        $assign = array();
        $assign['cuName'] = $currentUser['name'];
        $assign['cuEmail'] = $currentUser['email'];
        $assign['cuDay'] = $GLOBALS['conf']['CURRENT_DAY'];
        $assign['ttDays'] = $GLOBALS['conf']['CARNIVAL_DAYS'];
        $assign['reservationInfo'] = $data;
        return view('dashboard.index',$assign);
    }

    public function logout(Request $request){
        Auth::logout();
        return view('home.index');
    }

    public function newReservation(Request $request)
    {
        //read configuration file.
        $GLOBALS['conf'] = require_once("config/Conf.php");
        //read current user.
        $currentUser = Auth::user();
        //load current user`s reservation info
        $currentUserTotal = Reservation::where('email',$currentUser['email'])->count();

        $assign = array();
        $assign['cuName'] = $currentUser['name'];
        $assign['cuEmail'] = $currentUser['email'];
        $assign['cuTtRsv'] = $currentUserTotal;
        $assign['cuDay'] = $GLOBALS['conf']['CURRENT_DAY'];
        $assign['ttDays'] = $GLOBALS['conf']['CARNIVAL_DAYS'];
        return view('dashboard.newRsv',$assign);
    }

    public function checkin(Request $request)
    {
        //read configuration file.
        $GLOBALS['conf'] = require_once("config/Conf.php");
        //read current user.
        $currentUser = Auth::user();
        //load current user`s reservation info
        $currentUserTotal = Reservation::where('email',$currentUser['email'])->count();

        $assign = array();
        $assign['cuName'] = $currentUser['name'];
        $assign['cuEmail'] = $currentUser['email'];
        $assign['cuTtRsv'] = $currentUserTotal;
        $assign['cuDay'] = $GLOBALS['conf']['CURRENT_DAY'];
        $assign['ttDays'] = $GLOBALS['conf']['CARNIVAL_DAYS'];
        return view('dashboard.checkin',$assign);
    }
}
