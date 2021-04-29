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
            $table->string('trace_form_order_number');
            $table->string('trace_form_question');
            $table->string('trace_form_description');
            $table->string('trace_form_status');
            $table->string('trace_form_edit_count');
            $table->integer('trace_form_category_fkid')->unsigned();;
            $table->foreign('trace_form_category_fkid')
            ->references('id')
            ->on('trace_form_category_models')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->integer('trace_form_choices_fkid')->unsigned();;
            $table->foreign('trace_form_choices_fkid')
            ->references('id')
            ->on('trace_form_choices_models')
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
