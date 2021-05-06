<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTraceResponseModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trace_response_models', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('user_information_fkid')->unsigned();;
            $table->foreign('user_information_fkid')
            ->references('id')
            ->on('users')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->integer('trace_q_a_s_fkid')->unsigned();;
            $table->foreign('trace_q_a_s_fkid')
            ->references('id')
            ->on('trace_q_a_s')
            ->onDelete('cascade')
            ->onUpdate('cascade');

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
        Schema::dropIfExists('trace_response_models');
    }
}
