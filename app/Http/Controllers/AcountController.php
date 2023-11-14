<?php

namespace App\Http\Controllers;

use App\Guest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AcountController extends Controller
{
    public function login(Request $request){
        return view('acount.login');
    }
    public function loginAction(Request $request){
        $user=Guest::where('guest_name',$request->name)->where('guest_address',$request->address)->where('guest_tel',$request->tel);
        $_SESSION['name']=$user->guest_name;
        $_SESSION['address']=$user->guest_address;
        $_SESSION['tel']=$user->guest_tel;
        $url='reservation.'.$request->session()->get('url');
        return redirect($url);
    }
    public function logout(Request $request){
        return view('acount.logout');
    }
}
