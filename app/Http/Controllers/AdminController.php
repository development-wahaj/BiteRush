<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function orders()
    {
        return view('admin.orders');
    }

    public function menu()
    {
        return view('admin.menu');
    }

    public function riders()
    {
        return view('admin.riders');
    }

    public function fleetTracking()
    {
        return view('admin.fleet');
    }

    public function analytics()
    {
        return view('admin.analytics');
    }

    public function settings()
    {
        return view('admin.settings');
    }
}
