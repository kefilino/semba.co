<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserSignupRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        return view('landingpage.home');
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
