<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TraceFormController extends Controller
{
    public function index(){
        return view('components.pages.add-trace-form');
    }
}
