<?php

namespace App\CMS\Query;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AdminQueryBuilder extends Model
{
    public static function getAll($model){
        $data = DB::table($model)->get();
        return $data;
    }
}
