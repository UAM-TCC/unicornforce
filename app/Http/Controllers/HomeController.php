<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserSmartphone;
use Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $status = 0;
        if (Auth::check()) {
            $userSmartphone = new UserSmartphone();
            $status = $userSmartphone->where('user_id', Auth::user()->id)->pluck('status')->first();
        }

        return view('home', ['status' => $status]);
    }
}
