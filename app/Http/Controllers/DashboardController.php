<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;

class DashboardController extends Controller
{
    public function index(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $total_users=User::all()->count();
        $total_earning=Order::sum('total');
        $total_categories=Category::all()->count();
        $total_products=Product::all()->count();
        $total_orders=Order::all()->count();
        $total_roles=Role::all()->count();
        if (Auth::user()->hasRole('admin'))
        {
            $orders =Order::with('items','user','data')->get();
        }
        else
        {
            $orders =Order::with('items','user','data')->where('user_id',Auth::id())->get();
        }
        return view('dashboard',
            compact(
                'orders',
                'total_users',
                        'total_earning',
                        'total_categories',
                        'total_products',
                        'total_orders',
                        'total_roles'
            )
        );
    }
}
