<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        //  dd(auth()->user()->first_name);
        return view('frontend.index');
    }

    public function shop(){
        return view('frontend.shop');
    }

    public function detail(){
        return view('frontend.detail');
    }

    public function cart(){
        return view('frontend.cart');
    }

    public function checkout(){
        return view('frontend.checkout');
    }
    // public function register(){
    //     return view('auth.register');
    // }
    // public function login(){
    //     return view('auth.login');
    // }

}
