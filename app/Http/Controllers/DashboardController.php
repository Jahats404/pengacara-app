<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function admin()
    {
        return view('dashboard.dashboard-admin');
    }
    public function client()
    {
        return view('dashboard.dashboard-admin');
    }
}