<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReservationDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param=[
            'reservation_id'=>1,
            'room_id'=>1,
            'reservation_day'=>2,
            'reservation_price'=>24000,
        ];
        DB::table('reservation_details')->insert($param);
    }
}
