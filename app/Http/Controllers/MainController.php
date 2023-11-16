<?php

namespace App\Http\Controllers;

use App\Reservation;
use App\ReservationDetail;
use App\RoomType;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MainController extends Controller
{
    //ホーム
    public function index(Request $request)
    {
        $table = RoomType::all();
        return view('main.index', ['rooms' => $table]);
    }
    public function booking(Request $request)
    {
        $type = RoomType::where('id', $request->id)->first();
        return view('main.booking', ['room' => $type]);
    }
    public function reservation(Request $request)
    {
        $this->validate($request,Reservation::$reservation_rules);
        $item = RoomType::reservationCheck($request);

        if ($item != -1) {
            $reservation = new Reservation();
            $form = [
                'guest_id' => $request->id,
                'reservation_num' => $request->adults + $request->children,
                'reservation_adults' => $request->adults,
                'reservation_children' => $request->children,
                'check_in' => $request->check_in,
                'check_out' => $request->check_out,
                'other' => '',
            ];
            $data = $reservation->fill($form);
            $data->save();

            $carbonIn = new Carbon($request->check_in);
            $carbonOut = new Carbon($request->check_out);
            $between = $carbonIn->diffInDays($carbonOut);
            $data->room()->sync(
                [$request->type => [
                        'room_id' => $item,
                        'reservation_day' => $between,
                        'reservation_price' => 18000,]]
            );


            // $reservation = new ReservationDetail();
            // $form = [
            //     'reservation_id' => 1,
            //     'room_id' => $request->type,
            //     'reservation_day' => $between,
            //     'reservation_price' => 18000,
            // ];
            // $reservation->fill($form)->save();
        }
        return view('main.result', ['roomId' => $item]);
    }
}
