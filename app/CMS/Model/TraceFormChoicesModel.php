<?php

namespace App\CMS\Model;

use Illuminate\Database\Eloquent\Model;

class TraceFormChoicesModel extends Model
{
    protected $fillable = [
        'trace_form_choices_title',
        'trace_form_choices_status',
        'trace_form_choices_edit_count'
    ];
}
