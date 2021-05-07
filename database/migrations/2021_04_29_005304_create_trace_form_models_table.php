<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTraceFormModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trace_form_models', function (Blueprint $table) {
            $table->increments('id');
            $table->string('trace_form_question');
            $table->string('trace_form_description');
            $table->string('trace_form_input_type');
            $table->integer('trace_form_category_fkid')->unsigned();;
            $table->foreign('trace_form_category_fkid')
            ->references('id')
            ->on('trace_form_category_models')
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
        Schema::dropIfExists('trace_form_models');
    }
}
