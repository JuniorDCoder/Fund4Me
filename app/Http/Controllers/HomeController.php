<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function login(){
        return view('auth.login');
    }
    public function home(){
        $funds = [
            [
                'id' => 1,
                'title' => 'Fund title 1',
                'amount' => 5500000,
                'amountDonated' => 4000000,
                'category' => 'Education',
                'daysLeft' => 10,
            ],
            [
                'id' => 2,
                'title' => 'Fund title 2',
                'amount' => 3000000,
                'amountDonated' => 1500000,
                'category' => 'Health',
                'daysLeft' => 5,
            ],
            [
                'id' => 3,
                'title' => 'Fund title 1',
                'amount' => 400000,
                'amountDonated' => 4000,
                'category' => 'Education',
                'daysLeft' => 10,
            ],
            [
                'id' => 4,
                'title' => 'Fund title 1',
                'amount' => 500000,
                'amountDonated' => 4000,
                'category' => 'Education',
                'daysLeft' => 10,
            ],
            [
                'id' => 5,
                'title' => 'Fund title 1',
                'amount' => 200000,
                'amountDonated' => 40000,
                'category' => 'Education',
                'daysLeft' => 10,
            ],
        ];
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
}
