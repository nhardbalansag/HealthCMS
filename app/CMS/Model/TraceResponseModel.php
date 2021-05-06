<?php

namespace App\CMS\Model;

use Illuminate\Database\Eloquent\Model;

class TraceResponseModel extends Model
{
    protected $fillable = [
        'trace_form_fkid',
        'user_information_fkid',
        'trace_form_choices_fkid'
    ];
}
