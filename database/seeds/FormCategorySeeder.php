<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FormCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('trace_form_category_models')->insert([
            'trace_form_category_name' => "Test Form Category",
            'trace_form_category_description' => "Test Description",
            'trace_form_category_status' => "active"
        ]);

    }
}
