<?php

namespace App\CMS\Model;

use Illuminate\Database\Eloquent\Model;

class TraceFormModel extends Model
{
    protected $fillable = [
        'trace_form_question',
        'trace_form_description',
        'trace_form_input_type',
        'trace_form_category_fkid'
    ];
}
