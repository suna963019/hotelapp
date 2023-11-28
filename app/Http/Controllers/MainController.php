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

    public function bookingType(Request $request)
    {
        $type = RoomType::where('id', $request->id)->first();
        return view('main.bookingType', ['room' => $type]);
    }
    
    public function reservationType(Request $request)
    {
        $message = [
            'adults.number' => '人数を整数で入力してください。',
            'children.number' => '人数を整数で入力してください。',
            'check_in.required' => '宿泊日を入力してください。',
            'check_out.required' => '宿泊日を入力してください。',
        ];
        $validate = [
            'adults' => 'required',
            'children' => 'required',
            'check_in' => 'required',
            'check_out' => 'required',
        ];
        $this->validate($request, $validate, $message);
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
                'other' => '備考',
            ];
            $data = $reservation->fill($form);
            $data->save();

            $carbonIn = new Carbon($request->check_in);
            $carbonOut = new Carbon($request->check_out);
            $between = $carbonIn->diffInDays($carbonOut);
            // $data->room()->sync(
            //     [$request->type => [
            //             'room_id' => $item,
            //             'reservation_day' => $between,
            //             'reservation_price' => 18000,]]
            // );
            $form2 = [
                'room_id' => $item,
                'reservation_id' => $data->id,
                'reservation_day' => $between,
                'reservation_price' => 18000,
            ];
            $reservationDetail = new ReservationDetail();
            $reservationDetail->fill($form2)->save();


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
