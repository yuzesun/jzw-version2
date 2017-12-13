<?php

namespace App\Http\Controllers;

use App\Order;
use App\Organization;
use App\ShippingStatus;
use App\State;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Session;
use View;
use Validator;
use Input;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $orders = Order::all();
        return View::make('orders.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $shippingStatus = ShippingStatus::pluck('status_name', 'id');
        $organization = Organization::pluck('organization_name', 'id');
        return View::make('orders.create', compact('organization', 'shippingStatus'));
    }
}
