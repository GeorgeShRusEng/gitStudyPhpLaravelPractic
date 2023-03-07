<?php

namespace App\Http\Controllers;

use App\Models\basket;
use App\Models\product;
use Illuminate\Http\Request;

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
        $products = basket::where('user_id', auth()->user()->id)->get();
        return view('home', compact('products'));
    }
}
