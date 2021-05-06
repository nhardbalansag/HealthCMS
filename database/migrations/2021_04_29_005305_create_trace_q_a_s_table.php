<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTraceQASTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trace_q_a_s', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('trace_form_choices_fkid')->unsigned();
            $table->foreign('trace_form_choices_fkid')
            ->references('id')
            ->on('trace_form_choices_models')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->integer('trace_form_fkid')->unsigned();
            $table->foreign('trace_form_fkid')
            ->references('id')
            ->on('trace_form_models')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->integer('trace_form_category_fkid')->unsigned();
            $table->foreign('trace_form_category_fkid')
            ->references('id')
            ->on('trace_form_category_models')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->string('trace_form_question_and_choices_status');
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
        Schema::dropIfExists('trace_q_a_s');
    }
}
