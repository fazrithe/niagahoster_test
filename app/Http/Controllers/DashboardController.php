<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        session()->forget('user');
        return view('frontend.dashboard');
    }
}
