<?php

namespace App\Http\Controllers\Manage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function redirect()
    {
        return redirect()->route('manage.dashboard');
    }

    public function dashboard()
    {
        return view('manage.dashboard');
    }
}
