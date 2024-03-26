<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\todo;
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
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::user()->role == "ADMIN") {
            return view('adminHome');
        }

        if (Auth::user()->role == "STUDENT") {
            $todo = todo::all()->where('user_id', Auth::user()->id);
            return view('home',['todo' => $todo]);
        }
    }

    public function to_add()
    {
        return view('addTodo');
    }

    public function to_update(Request $request)
    {
        $todo = todo::where('id', $request->id)->first();
        return view('updateTodo',['todo' => $todo]);
    }
}
