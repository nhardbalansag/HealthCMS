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
            'user_login_type' => "trace",
            'app_id' => null,
            'user_first_name' => "bernard",
            'user_middle_name' => null,
            'user_last_name' => "balansag",
            'user_birthday' => Carbon::parse('1997-01-04'),
            'user_sex' => "male",
            'user_house_number' => "8747",
            'user_street' => "paseo de roxas",
            'user_building_name_or_subdivision_name' => "ba lepanto",
            'user_city' => "makati",
            'user_company_name' => "CIMMS",
            'user_type' => "admin",
            'user_edit_count' => 0,
            'email' => "admin@gmail.com",
            'password' => Hash::make('helloworld')
        ]);


        DB::table('users')->insert([
            'user_login_type' => "trace",
            'app_id' => null,
            'user_first_name' => "bernard test",
            'user_middle_name' => null,
            'user_last_name' => "balansag test",
            'user_birthday' => Carbon::parse('1997-01-04'),
            'user_sex' => "male",
            'user_house_number' => "8747",
            'user_street' => "paseo de roxas",
            'user_building_name_or_subdivision_name' => "ba lepanto",
            'user_city' => "makati",
            'user_company_name' => "CIMMS",
            'user_type' => "user",
            'user_edit_count' => 0,
            'email' => "test@email.com",
            'password' => Hash::make('helloworld')
        ]);
    }
}
