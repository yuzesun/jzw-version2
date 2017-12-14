<?php

namespace App\Http\Controllers;

use App\Branch;
use App\Order;
use App\Organization;
use App\ShippingStatus;
use App\State;
use App\Vendor;
use Carbon\Carbon;
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
        $vendor = Vendor::pluck('vendor_name', 'id');
        $shippingStatus = ShippingStatus::pluck('status_name', 'id');
        $organization = Organization::pluck('organization_name', 'id');
        $branch = Branch::pluck('branch_name', 'id');
        return View::make('orders.create', compact('organization', 'shippingStatus', 'branch', 'vendor'));
    }

    public function store()
    {
        $rules = array(
            'organization_id' => 'required',
            'branch_id' => 'required',
            'order_number' => 'unique:orders|required',
            'order_date' => 'required',
            'etd' => 'required',
            'eta' => 'required',
            'shipping_status' => 'required'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('order/create')
                ->withErrors($validator);
        } else {
            // store
            $order = new Order;
            $order->organization_id = Input::get('organization_id');
            $order->branch_id = Input::get('branch_id');
            $order->vendor_id = Input::get('vendor_id');
            $order->forwarder_id = Input::get('forwarder_id');
            $order->order_number = Input::get('order_number');
            $order->order_date = Input::get('order_date');
            $order->etd = Input::get('etd');
            $order->eta = Input::get('eta');
            $order->vendor_payment = Input::get('vendor_payment');
            $order->shipping_status = Input::get('shipping_status');
            $order->comments = Input::get('comments');
            $order->save();

            // redirect
            Session::flash('message', 'Successfully Created Order');
            return Redirect::to('order');
        }
    }

    public function edit($id)
    {
        $vendor = Vendor::pluck('vendor_name', 'id');
        $shippingStatus = ShippingStatus::pluck('status_name', 'id');
        $organization = Organization::pluck('organization_name', 'id');
        $branch = Branch::pluck('branch_name', 'id');
        $order = Order::findOrFail($id);
        return View::make('orders.edit', compact('order', 'vendor', 'organization', 'shippingStatus', 'branch'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $rules = array(
            'organization_id' => 'required',
            'branch_id' => 'required',
            'order_number' => 'required',
            'order_date' => 'required',
            'etd' => 'required',
            'eta' => 'required',
            'shipping_status' => 'required'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('order/' .$id .'/edit')
                ->withErrors($validator);
        } else {
            // store

            $order = Order::findOrFail($id);
            $order->organization_id = Input::get('organization_id');
            $order->branch_id = Input::get('branch_id');
            $order->vendor_id = Input::get('vendor_id');
            $order->forwarder_id = Input::get('forwarder_id');
            $order->order_number = Input::get('order_number');
            $order->order_date = Input::get('order_date');
            $order->etd = Input::get('etd');
            $order->eta = Input::get('eta');
            $order->vendor_payment = Input::get('vendor_payment');
            $order->shipping_status = Input::get('shipping_status');
            $order->comments = Input::get('comments');

            $order->save();

            // redirect
            Session::flash('message', 'Successfully Updated Order');
            return Redirect::to('order');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $branch = Branch::findorFail($id);
        $branch->delete();

        // redirect
        Session::flash('message', 'Successfully deleted the Order');
        return Redirect::to('order');
    }
}
