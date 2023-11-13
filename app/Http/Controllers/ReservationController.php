<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservationController extends Controller
{
    //ログイン後のみのページ
    public function reservation(Request $request){
        return view('hotel.index');
    }
    public function reservationAdd(Request $request){
        return view('hotel.index');
    }
    public function reservationDetail(Request $request){
        return view('hotel.index');
    }
    public function reservationUpdate(Request $request){
        return view('hotel.index');
    }
    public function reservationDel(Request $request){
        return view('hotel.index');
    }
}
