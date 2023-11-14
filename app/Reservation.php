<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $primaryKey = 'id';
    
    public function reservationDetails(){
        return $this->hasMany('App\ReservationDetail');
    }
    public function room(){
        return $this->belongsToMany('App\Room','reservation_details','reservation_id','room_id');
    }
}
