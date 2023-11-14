<?php

namespace App\Http\Controllers;

use App\RoomType;
use Illuminate\Http\Request;

class MainController extends Controller
{
    //ホーム
    public function index(Request $request){
        return view('main.index');
    }
    public function booking(Request $request){
        $table=RoomType::all();
        $reservation_in=$request->check_in;
        $reservation_out=$request->check_out;
        foreach (RoomType::where('id',1)->room as $room) {
            foreach ( $room->reservation as $reservation) {
                //in or outが
                if ($reservation_in>=$reservation->check_in ||$reservation_in<$reservation->check_out ) {
                    
                    break;
                }

                if ($reservation_out>$reservation->check_in ||$reservation_out<=$reservation->check_out ) {
                    
                    break;
                }
                
                if ($reservation_out>$reservation->check_in ||$reservation_out<=$reservation->check_out ) {
                    
                    break;
                }
            }
        }
        return view('main.booking',['rooms'=>$table]);
    }
}
