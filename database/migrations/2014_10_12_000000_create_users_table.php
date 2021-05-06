<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_login_type');
            $table->string('app_id')->nullable();
            $table->string('user_first_name')->nullable();
            $table->string('user_middle_name')->nullable();
            $table->string('user_last_name')->nullable();
            $table->string('user_birthday')->nullable();
            $table->string('user_sex')->nullable();
            $table->string('user_house_number')->nullable();
            $table->string('user_street')->nullable();
            $table->string('user_building_name_or_subdivision_name')->nullable();
            $table->string('user_city')->nullable();
            $table->string('user_company_name')->nullable();
            $table->string('user_type');
            $table->integer('user_edit_count');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
