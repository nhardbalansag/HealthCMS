<?php

namespace App\CMS\Model;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [
        'title',
        'description',
        'status'
    ];
}
