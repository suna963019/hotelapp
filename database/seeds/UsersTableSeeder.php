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
            'email' => 'check@mail',
            'password' => Hash::make('password'),
            'root_check'=>true,
        ]);
    }
}
