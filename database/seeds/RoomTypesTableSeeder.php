<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param=[
            'room_type_name'=>'洋室',
            'room_type_num'=>2,
        ];
        DB::table('room_types')->insert($param);
        $param=[
            'room_type_name'=>'和室',
            'room_type_num'=>2,
        ];
        DB::table('room_types')->insert($param);
        $param=[
            'room_type_name'=>'シングル',
            'room_type_num'=>1,
        ];
        DB::table('room_types')->insert($param);
        $param=[
            'room_type_name'=>'洋室スイート',
            'room_type_num'=>3,
        ];
        DB::table('room_types')->insert($param);
        $param=[
            'room_type_name'=>'和室スイート',
            'room_type_num'=>3,
        ];
        DB::table('room_types')->insert($param);
        $param=[
            'room_type_name'=>'ロイヤルスイート',
            'room_type_num'=>2,
        ];
        DB::table('room_types')->insert($param);
    }
}
