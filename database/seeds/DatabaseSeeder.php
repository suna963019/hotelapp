<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(GuestsTableSeeder::class);
        $this->call(RoomTypesTableSeeder::class);
        $this->call(RoomsTableSeeder::class);
        $this->call(ReservationsTableSeeder::class);
        $this->call(ReservationDetailsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
