<?php

namespace App\CMS\Model;

use Illuminate\Database\Eloquent\Model;

class TraceQA extends Model
{
    protected $fillable = [
        'trace_form_choices_fkid',
        'trace_form_fkid',
        'trace_form_category_fkid',
        'trace_form_question_and_choices_status'
    ];
}
