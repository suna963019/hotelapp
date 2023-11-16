<?php

namespace App\Http\Controllers;

use App\Reservation;
use App\Room;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    //ログイン後のみのページ
    public function reservation(Request $request){
        return view('hotel.index');
    }
    public function roomCheck(Request $request){
        $items=Room::where('id',1)->get();
        return view('reservation.roomCheck',['items'=>$items]);
    }
    public function reservationDetail(Request $request){
        $items=Reservation::where('id',1)->first();
        return view('reservation.reservationDetail',['items'=>$items]);
    }
    public function reservationUpdate(Request $request){
        return view('hotel.index');
    }
    public function reservationDel(Request $request){
        return view('hotel.index');
    }
}
