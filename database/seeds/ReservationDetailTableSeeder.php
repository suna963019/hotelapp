<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReservationDetailTableSeeder extends Seeder
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
            'room_id'=>4,
            'reservation_days'=>3,
            'reservation_value'=>1200,
        ];
        DB::table('rooms')->insert($param);
    }
}
