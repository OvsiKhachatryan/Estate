<?php

namespace App\Http\Controllers\Frontend\Auth\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MyAdController extends Controller
{
    public function index()
    {
        return view('frontend.auth.dashboard.myads');
    }
}
