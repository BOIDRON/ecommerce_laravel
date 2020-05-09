<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   // public function __construct()
    //{
      //  $this->middleware('auth');
    //}

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        return view('home');
    }

    public function contact()
    {
    return view('contact');
    }

    public function shop()
    {
    return view('shop');
    }

    public function product()
    {
    return view('product');
    }

    public function cart()
    {
    return view('cart');
    }

    public function checkout()
    {
    return view('checkout');
    }

    public function success()
    {
    return view('success');
    }
    public function orders()
    {
        return view('orders');
    }

}

