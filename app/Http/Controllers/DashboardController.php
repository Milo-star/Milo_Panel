<?php 

namespace App\Http\Controllers;

use App\Models\Order;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $orders = Order::all();
        return view('dashboard', compact('orders'));
    }
    
}