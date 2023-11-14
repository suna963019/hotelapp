<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReservationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param=[
            'guest_id'=>1,
            'reservation_num'=>3,
            'reservation_adults'=>2,
            'reservation_children'=>1,
            'check_in'=>'2023-12-24',
            'check_out'=>'2023-12-25',
            'other'=>'その他',
        ];
        DB::table('reservations')->insert($param);
    }
}
