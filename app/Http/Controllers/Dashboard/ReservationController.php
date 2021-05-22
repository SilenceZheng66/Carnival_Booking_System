<?php


namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ReservationController extends Controller
{
    public function store(Reservation $reservation)
    {
        $time = time();
        $data = [
            'invitation' => 'aaaaaa',
            'email' => '13754430639@163.com',
            'reserve_date_at' => 1,
            'checkin' => false,
            'checkin_at' => date('Y-m-d H:i:s', $time),
        ];
        $reservation->create($data);
        dump($reservation->get());
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

}
