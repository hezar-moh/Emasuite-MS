<?php

namespace App\Http\Controllers;

use App\Models\System;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index()
    {

        $system = System::all()->count();
        return view('dashboard.index', compact('system'));
    }
}
