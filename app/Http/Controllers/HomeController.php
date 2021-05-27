<?php

namespace App\Http\Controllers;

use GuzzleHttp\Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // return view('home');


        if(Auth::user()->user_type === "admin"){
            return view('components.pages.dashboard-main');
        }else if(Auth::user()->user_type === "user"){
            return redirect()->route('user-home-index');
        }else{
            abort(403, 'Unauthorized');
        }
    }
}
