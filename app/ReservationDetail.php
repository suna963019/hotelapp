<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReservationDetail extends Model
{
    protected $primaryKey = 'id';
    
    public function room(){
        return $this->belongsTo('App\Room','room_id','id');
    }
}
