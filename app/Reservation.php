<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $primaryKey = 'id';
    
    public function roomType(){
        return $this->hasOne('App\Guest');
    }
}
