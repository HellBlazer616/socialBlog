<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = auth()->user();
        return view('home')->with('user', $user);
    }

    public function profile($name)
    {
        $user = User::where('user_name', '=', $name)->firstOrFail();
        return view('home')->with('user', $user);
    }
}
