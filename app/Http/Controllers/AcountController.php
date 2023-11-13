<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AcountController extends Controller
{
    public function login(Request $request){
        return view('acount.login');
    }
    public function loginAction(Request $request){
        $url='reservation.'.$request->session()->get('url');
        return redirect($url);
    }
    public function logout(Request $request){
        return view('acount.logout');
    }
}
