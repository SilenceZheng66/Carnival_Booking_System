<?php


namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function index(Request $request){
        $assign = array();
        $currentUser = Auth::user();
        $assign['cuName'] = $currentUser['name'];
        $assign['cuEmail'] = $currentUser['email'];
        return view('dashboard.index',$assign);
    }

    public function logout(Request $request){
        Auth::logout();
        return view('home.index');
    }
}
