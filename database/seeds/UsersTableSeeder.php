<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' =>'root',
            'email' => 'root@mail',
            'password' => Hash::make('にゃんこ先生'),
            'root_check'=>false,
        ]);
    }
}
