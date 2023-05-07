<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\Product;
use App\Models\Category;
use App\Models\User;
use App\Models\Order;

class DashboardController extends Controller
{
    public function index()
    {

        $totalProducts=Product::count();
        $totalCategories=Category::count();

        $totalAllUsers=User::count();
        $totalUser=User::where('role_as','0')->count();
        $totalAdmin=User::where('role_as','1')->count();

        $todayDate=Carbon::now()->format('d-m-Y');
        $thisMonth=Carbon::now()->format('m');
        $thisYear=Carbon::now()->format('Y');

        $totalOrder=Order::count();
        $todayOrder=Order::whereDate('created_at',$todayDate)->count();
        $thisMonthOrder=Order::whereMonth('created_at',$thisMonth)->count();
        $thisYearOrder=Order::whereMonth('created_at',$thisYear)->count();

        return view('admin.dashboard',compact('totalProducts','totalCategories','totalAllUsers','totalUser','totalAdmin','totalOrder','todayOrder','thisMonthOrder','thisYearOrder'));
    }
}
