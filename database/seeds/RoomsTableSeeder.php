<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param=[
            'room_type_id'=>1,
            'room_num'=>101,
            'other'=>'',
        ];
        DB::table('rooms')->insert($param);
        $param=[
            'room_type_id'=>1,
            'room_num'=>102,
            'other'=>'',
        ];
        DB::table('rooms')->insert($param);
        $param=[
            'room_type_id'=>2,
            'room_num'=>103,
            'other'=>'',
        ];
        DB::table('rooms')->insert($param);
        $param=[
            'room_type_id'=>2,
            'room_num'=>104,
            'other'=>'',
        ];
        DB::table('rooms')->insert($param);
        $param=[
            'room_type_id'=>3,
            'room_num'=>201,
            'other'=>'',
        ];
        DB::table('rooms')->insert($param);
        $param=[
            'room_type_id'=>3,
            'room_num'=>202,
            'other'=>'',
        ];
        DB::table('rooms')->insert($param);
        $param=[
            'room_type_id'=>4,
            'room_num'=>203,
            'other'=>'',
        ];
        DB::table('rooms')->insert($param);
        $param=[
            'room_type_id'=>4,
            'room_num'=>204,
            'other'=>'',
        ];
        DB::table('rooms')->insert($param);
        $param=[
            'room_type_id'=>5,
            'room_num'=>301,
            'other'=>'',
        ];
        DB::table('rooms')->insert($param);
        $param=[
            'room_type_id'=>5,
            'room_num'=>302,
            'other'=>'',
        ];
        DB::table('rooms')->insert($param);
        $param=[
            'room_type_id'=>6,
            'room_num'=>401,
            'other'=>'',
        ];
        DB::table('rooms')->insert($param);
    }
}
