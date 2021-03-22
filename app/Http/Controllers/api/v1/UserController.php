<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function testindex(){
        return response()->json("hello", 200, [], JSON_UNESCAPED_SLASHES|JSON_PRETTY_PRINT);
    }
}
