<?php

use App\Guest;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GuestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param=[
            'guest_name'=>'name',
            'guest_address'=>'address',
            'guest_tel'=>'090-0120-4466',
        ];
        DB::table('guests')->insert($param);
    }
}
