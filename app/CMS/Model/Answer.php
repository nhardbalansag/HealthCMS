<?php

namespace App\CMS\Model;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $fillable = [
        'answer',
        'question',
        'user_id'
    ];
}
