<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class RoomType extends Model
{
    protected $primaryKey = 'id';

    public function rooms()
    {
        return $this->hasMany('App\Room');
    }

    public static function reservationCheck($request)
    {
        $reservation_in = new Carbon($request->check_in);
        $reservation_out =  new Carbon($request->check_out);

        $daycheck1 = $reservation_in->gte($reservation_out);
        $daycheck2 = $reservation_in->lt(Carbon::now());
        if ($daycheck1 || $daycheck2) {
        }

        $roomId = -1;
        $check = true;
        $obj = RoomType::where('id', $request->id)->first();
        foreach ($obj->rooms as $room) {
            $check = true;
            foreach ($room->reservations as $reservation) {
                $carbonIn = new Carbon($reservation->check_in);
                $carbonOut = new Carbon($reservation->check_out);

                //in<rin<out
                $check1 = $reservation_in->between($carbonIn,$carbonOut->subDay());
                $carbonOut->addDay();

                //inr<out<out
                $check2 = $reservation_out->between($carbonIn->addDay(), $carbonOut);
                $carbonIn->subDay();

                //rin<in<out<rout
                $check3 = $reservation_in->lte($carbonIn) && $reservation_out->gte($carbonOut);

                //in or outが中にあるか
                if ($check1 || $check2 || $check3) {
                    $check = false;
                    break;
                }
            }
            if ($check) {
                $roomId = $room->id;
                break;
            }
        }
        return $roomId;
    }
}
