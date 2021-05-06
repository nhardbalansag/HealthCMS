<?php

namespace App\CMS\Model;

use Illuminate\Database\Eloquent\Model;

class TraceTemperatureModel extends Model
{
    protected $fillable = [
        'trace_temperature_temp',
        'user_information_fkid'
    ];
}
