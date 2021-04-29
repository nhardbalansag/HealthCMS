<?php

namespace App\CMS\Model;

use Illuminate\Database\Eloquent\Model;

class TraceFormModel extends Model
{
    protected $fillable = [
        'trace_form_order_number',
        'trace_form_question',
        'trace_form_description',
        'trace_form_status',
        'trace_form_edit_count',
        'trace_form_category_fkid',
        'trace_form_choices_fkid'
    ];
}
