<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class DashboardController extends Controller
{    
    public function __construct()
    {
        $this->middleware('auth');

        $this->middleware('is_admin')->only('admin_dashboard');
    }

    public function index()
    {
        if (Auth::user()->is_admin) {
            return $this->admin_dashboard();
        }
        return $this->user_dashboard();
    }

    public function user_dashboard()
    {
        return Inertia::render('User/Dashboard');
    }

    public function admin_dashboard()
    {
        return Inertia::render('Admin/Dashboard');
    }
}
