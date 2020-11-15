<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ControllerUser extends Controller
{
    public function index() {
        if (!Auth::check()) {
            return view('landingpage.landing');
        } else {
            return view('dashboard');
        }
    }

    public function about() {
        return view('landingpage.about');
    }

    public function login() {
        return view('landingpage.login');
    }

    public function register() {
        return view('landingpage.register');
    }
}
