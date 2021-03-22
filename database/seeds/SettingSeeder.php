<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
            'app_title' => "SAMPLE TITLE",
            'description' => "test description of this project",
            'licence_key' => "admin123",
            'app_owner' => "bernard balansag",
            'company_name' => "Test Company"
        ]);
    }
}
