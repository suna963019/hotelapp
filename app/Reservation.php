<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $primaryKey = 'id';

    protected $guarded=array('id');

    public static $reservation_rules=array(
        'adults'=>'required',
        'children'=>'required',
        'check_in'=>'required',
        'check_out'=>'required',
    );
    public static $message=[];
    
    public function reservationDetails(){
        return $this->hasMany('App\ReservationDetail');
    }
    public function room(){
        return $this->belongsToMany('App\Room','reservation_details','reservation_id','room_id');
    }
}
