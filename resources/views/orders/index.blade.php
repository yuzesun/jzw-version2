@extends('layouts.app')

@section('content')

    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/home')}}">Home</a></li>
            <li class="breadcrumb-item active">Orders</li>
        </ol>
        <div style="padding: 20px 0px;">
            <a href="{{URL::to('order/create')}}" class="btn btn-primary" style="">Add Order</a>
        </div>

        {{--<div class="col-md-offset-8 col-lg-offset-8 col-xs-offset-8 form-inline">--}}
        {{--{{ Form::open(['method'=> 'GET', 'action' => 'OrderController@searchOrder']) }}--}}
        {{--{{Form::input('search','q', null, ['placeholder' => 'Purchase order number...','class'=>'form-control', 'autocomplete'=>'off'])}}--}}
        {{--{!! Form::submit('Search', ['class' => 'btn btn-default']) !!}--}}
        {{--{{ Form::close() }}--}}
        {{--</div>--}}
        <div class="" style="padding: 30px 0px 10px;">
            @if (Session::has('message'))
                <div class="alert alert-success" style="width: 280px; float: left;">{{ Session::get('message') }}</div>
            @endif
            <div class="" style="padding: 60px 0px 20px; float: right;">
                <a type="button" class="btn btn-default" href="{{ action('OrderController@index') }}">View All Orders</a>
            </div>
        </div>


        @if(sizeOf($orders) != 0)

            <table class="table table-striped table-bordered table-hover text-center">
                <thead>
                <tr class="">
                    <th class="text-center">Order Number</th>
                    <th class="text-center">Organizaiton Name</th>
                    <th class="text-center">Vendor Name</th>
                    <th class="text-center">Departure Date</th>
                    <th class="text-center">Shipping Status</th>
                    <th class="text-center" colspan="3">Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($orders as $order)
                    <tr>
                        <td style="vertical-align: middle">{{ $order->order_number }}</td>
                        <td style="vertical-align: middle">{{ $order->orderOrg->organization_name}}</td>
                        <td style="vertical-align: middle">{{ $order->orderVendor->vendor_name}}</td>
                        <td style="vertical-align: middle">{{ $order->etd }}</td>
                        <td style="vertical-align: middle">{{ $order->orderStatus->status_name   }}</td>
                        <td style="vertical-align: middle"><a href="{{ URL::to('order/' . $order->id . '/edit') }}" class="btn btn-info"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Profile</a></td>
                        <td class="" style="vertical-align: middle">
                            {!! Form::open(['method' => 'DELETE', 'route'=>['order.destroy', $order->id]]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', ['class' => 'btn btn-danger', 'type' => 'submit']) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
                {{--{{$organizations->links()}}--}}
                </tbody>
            </table>
        @else
            <p>No Order is stored in the system yet.</p>
        @endif
        {{--{{$organizations->links()}}--}}
    </div>



@endsection