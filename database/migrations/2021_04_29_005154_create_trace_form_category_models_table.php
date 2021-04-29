<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTraceFormCategoryModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trace_form_category_models', function (Blueprint $table) {
            $table->increments('id');
            $table->string('trace_form_category_name');
            $table->string('trace_form_category_description');
            $table->string('trace_form_category_status');
            $table->integer('trace_form_category_edit_count');
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
        Schema::dropIfExists('trace_form_category_models');
    }
}
