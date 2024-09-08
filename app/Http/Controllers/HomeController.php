<?php

namespace App\Http\Controllers;

use App\Models\Fund;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function login(){
        return view('auth.login');
    }
    public function home(){
        $funds = Fund::paginate(10);
        return view('welcome', ['funds' => $funds]);
    }
    public function contact(){
        return view('contact');
    }
    public function about(){
        return view('about');
    }
    public function dashboard(){
        return view('auth.dashboard');
    }

    public function profile(){
        return view('auth.profile');
    }

    public function register(){
        return view('auth.register');
    }

    public function fund($slug){
        $fund = Fund::where('slug', $slug)->first();
        return view('fund-details', ['fund' => $fund]);
    }
}
