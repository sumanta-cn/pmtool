<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        //dd(Auth::user());
        return view('home');
    }
    public function test(){
        echo '12';die;
        return view('home');
    }
}
