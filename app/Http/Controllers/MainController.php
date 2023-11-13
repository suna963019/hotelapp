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
        return view('main.booking',['rooms'=>$table]);
    }
}
