<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTraceTemperatureModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trace_temperature_models', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('trace_temperature_temp');
            $table->integer('user_information_fkid')->unsigned();;
            $table->foreign('user_information_fkid')
            ->references('id')
            ->on('users')
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
        Schema::dropIfExists('trace_temperature_models');
    }
}
