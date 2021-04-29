<?php

namespace App\CMS\Model;

use Illuminate\Database\Eloquent\Model;

class TraceFormCategoryModel extends Model
{
    protected $fillable = [
        'trace_form_category_name',
        'trace_form_category_description',
        'trace_form_category_status',
        'trace_form_category_edit_count'
    ];
}
