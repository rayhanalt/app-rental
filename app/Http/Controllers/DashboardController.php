<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Mobil;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard', [
            'mobil' => Mobil::count(),
            'customer' => Customer::count()
        ]);
    }
}
