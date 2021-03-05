<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mstreport;

class DashboardController extends Controller
{
    public function index()
    {
        
        return view('dashboards.index');

    }
}
