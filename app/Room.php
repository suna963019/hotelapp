<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Room extends Model
{
    protected $primaryKey = 'id';

    public function roomType(){
        return $this->belongsTo('App\RoomType','room_type_id');
    }
    
    public function reservations():BelongsToMany{
        return $this->belongsToMany('App\Reservation','reservation_details','room_id','reservation_id');
    }
}
