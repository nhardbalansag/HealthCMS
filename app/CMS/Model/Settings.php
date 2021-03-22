<?php

namespace App\CMS\Model;

use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    protected $fillable = [
        'app_title',
        'description',
        'licence_key',
        'app_owner',
        'company_name'
    ];
}




