<?php

namespace App\Http\Controllers;

use App\RoomType;
use Illuminate\Http\Request;

class MainController extends Controller
{
    //ホーム
    public function index(Request $request)
    {
        return view('main.index');
    }
    public function booking(Request $request){
        $table=RoomType::all();
        return view('main.booking',['rooms'=>$table]);
    }
    public function reservation(Request $request)
    {
        // $reservation_in = $request->check_in;
        // $reservation_out = $request->check_out;
        $reservation_in = '2023-12-23';
        $reservation_out = '2023-12-24';
        $roomId=-1;
        $check=true;
        $obj=RoomType::where('id', $request->id)->first();
        foreach ($obj->rooms as $room) {
            $check = true;
            foreach ($room->reservations as $reservation) {
                //in or outが中にあるか
                if ($reservation_in >= $reservation->check_in || $reservation_in < $reservation->check_out) {
                    $check = false;
                    break;
                }

                if ($reservation_out > $reservation->check_in || $reservation_out <= $reservation->check_out) {
                    $check = false;
                    break;
                }
                //inとoutの中にあるか
                if ($reservation_out > $reservation->check_in || $reservation_out <= $reservation->check_out) {
                    $check = false;
                    break;
                }
            }
            if ($check) {
                $roomId=$room->id;
                break;
            }
        }
        return view('main.result', ['check' => $check,'roomId'=>$roomId]);
    }
}
