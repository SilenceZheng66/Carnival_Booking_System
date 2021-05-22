<?php


namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ReservationController extends Controller
{
    public function store(Request $request)
    {
        $reservation = new Reservation();
        $time = time();
        $errorMsg = array();
        $rda = $request->post('rsv_day_at');
        if ($rda!=null){
            if (Auth::check()){
                $currentUser = Auth::user();
                $checkIfHasRsvThatDay = Reservation::where('reserve_date_at',$rda)->where('email',$currentUser['email'])
                    ->count();
                if ($checkIfHasRsvThatDay==0) {
                    $totalRsv = Reservation::where('reserve_date_at', $rda)->count();
                    if ($totalRsv < 10) {
                        $data = [
                            'invitation' => $this->getUniqueInvitationCode(),
                            'email' => $currentUser['email'],
                            'reserve_date_at' => $rda,
                            'checkin' => false,
                            'checkin_at' => date('Y-m-d H:i:s', $time),
                        ];
                        $reservation->create($data);
                        return redirect('/dashboard');
                    } else {$errorMsg['fullRsv'] = 1;}
                }else{$errorMsg['aldHave']=1;}
            }else{$errorMsg['auth']=1;}
        }else{$errorMsg['rba']=1;}
        return view('dashboard.error',$errorMsg);
    }

    public function cancel(Request $request)
    {
        if($request->input('ivtcd') !== null) {
            $invitationCode = $request->input('ivtcd');
            if (Auth::check()) {
                $currentUser = Auth::user();
                $data = Reservation::where('invitation',$invitationCode)->first();
                //Prevent other users from deleting information
                if ($data->email == $currentUser['email']){
                    $result = Reservation::where('invitation',$invitationCode)->delete();
                    return redirect('/dashboard');
                }
            }
        }
        return redirect('/dashboard');
    }

    public function checkin(Request $request)
    {

    }

    function getUniqueInvitationCode(): string
    {
        $code = $this->makeInvitationCode();
        while (true){
            $checker = Reservation::where('invitation',$code)->count();
            if ($checker==0){
                break;
            }
            $code = $this->makeInvitationCode();
        }
        return $code;
    }

    function makeInvitationCode( $length = 6 ): string
    {
        $chars = array( 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h',
            'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's',
            't', 'u', 'v', 'w', 'x', 'y', 'z');
        $keys = array_rand( $chars, $length );
        $password = '';
        for ( $i = 0; $i < $length; $i++ )
        {
            $password .= $chars[$keys[$i]];
        }
        return $password;
    }
}
