<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Leave;
use App\Models\Appearance;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard()
    {
        $totalUser = User::count();
        $totalLeave = Leave::count();
        $totalAppearance = Appearance::count();
        return view('admin.dashboard',compact('totalLeave','totalAppearance', 'totalUser'));
    }

}
