<?php

namespace App\Http\Controllers;

use App\Models\Bantuan;
use App\Models\Berita;
use App\Models\Permintaan;
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
        $data['jml_permintaan'] = Permintaan::all()->count();
        $data['jml_bantuan'] = Bantuan::all()->count();
        $data['jml_berita'] = Berita::all()->count();
        return Inertia::render('Admin/Dashboard', ['data' => $data]);
    }

    public function pengaturan()
    {
        return Inertia::render('Pengaturan');
    }
}
