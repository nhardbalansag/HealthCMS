<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'first_name' => "bernard",
            'last_name' => "balansag",
            'birthday' => Carbon::parse('1997-01-04'),
            'city' => "makati",
            'house_number' => "8747",
            'street' => "paseo de roxas",
            'province' => "manila",
            'contact_number' => "09214408767",
            'role' => "admin",
            'status' => true,
            'email' => "nhardbalansag@gmail.com",
            'password' => Hash::make('helloworld')
        ]);
    }
}
