<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function ownerDashboard(){

        return view('owner_dashboard');
    }

    public function managerDashboard(){

        return view('manager_dashboard');
    }

    public function cashierDashboard(){

        return view('cashier_dashboard');
    }
}
