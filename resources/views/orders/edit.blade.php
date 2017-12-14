@extends('layouts.app')

@section('content')
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/home')}}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{url('/order')}}">Order</a></li>
            <li class="breadcrumb-item active">Order Profile</li>
        </ol>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit an Order</div>

                    <div class="panel-body form-horizontal">

                        {{ Form::model($order, array('route' => array('order.update', $order->id), 'method' => 'PUT')) }}

                        <div class="form-group{{ $errors->has('order_number') ? ' has-error' : '' }}">
                            <label for="order_number" class="col-md-4 control-label">Order Number</label>

                            <div class="col-md-6">
                                <input id="order_number" placeholder="e.g. 123456789" type="text" style="width: 155px;" class="form-control" name="order_number" value="{{ old('order_number', $order->order_number) }}" required>

                                @if ($errors->has('order_number'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('order_number') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('organization_id') ? ' has-error' : '' }}">
                            <label for="organization_id" class="col-md-4 control-label">Organization Name</label>

                            <div class="col-md-6" style="">
                                {!! Form::select('organization_id', array(null => 'Select an Organization') + $organization->all(), old('organization_id', $order->organization_id), ['class'=>'form-control', 'id' => 'loc-drop-down', 'required']) !!}
                                @if ($errors->has('organization_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('organization_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('branch_id') ? ' has-error' : '' }}">
                            <label for="branch_id" class="col-md-4 control-label">Branch Name</label>

                            <div class="col-md-6" style="">
                                {!! Form::select('branch_id', array(null => 'Select a Branch') + $branch->all(), old('branch_id', $order->branch_id), ['class'=>'form-control', 'id' => 'loc-drop-down', 'required']) !!}
                                @if ($errors->has('branch_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('branch_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('order_date') ? ' has-error' : '' }}">
                            <label for="order_date" class="col-md-4 control-label">Order Date</label>

                            <div class="col-md-6">
                                <input type="date" placeholder="MM / DD / YYYY" class="form-control" style="width: 155px;" name="order_date" value="{{$order->order_date}}">

                                @if ($errors->has('order_date'))
                                    <span class="help-block">
                                            <strong>{{ $errors->first('order_date') }}</strong>
                                        </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('vendor_id') ? ' has-error' : '' }}">
                            <label for="vendor_id" class="col-md-4 control-label">Vendor Name</label>

                            <div class="col-md-6" style="">
                                {!! Form::select('vendor_id', array(null => 'Select a Vendor') + $vendor->all(), null, ['class'=>'form-control', 'required']) !!}
                                @if ($errors->has('vendor_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('vendor_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('etd') ? ' has-error' : '' }}">
                            <label for="etd" class="col-md-4 control-label">Estimated Departure Date</label>

                            <div class="col-md-6">
                                <input type="date" placeholder="MM / DD / YYYY" class="form-control" style="width: 155px;" name="etd" value="{{ old('etd', $order->etd) }}">

                                @if ($errors->has('etd'))
                                    <span class="help-block">
                                            <strong>{{ $errors->first('etd') }}</strong>
                                        </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('eta') ? ' has-error' : '' }}">
                            <label for="eta" class="col-md-4 control-label">Estimated Arrival Date</label>

                            <div class="col-md-6">
                                <input type="date" placeholder="MM / DD / YYYY" style="width: 155px;" class="form-control" name="eta" value="{{ old('eta', $order->eta) }}" required>

                                @if ($errors->has('eta'))
                                    <span class="help-block">
                                                            <strong>{{ $errors->first('eta') }}</strong>
                                                        </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('vendor_payment') ? ' has-error' : '' }} money">
                            <label for="vendor_payment" class="col-md-4 control-label">vendor_payment (Optional)</label>

                            <div class="col-md-6" style="display: flex; justify-content: flex-start;">
                                <input class="numberOnly form-control" placeholder="0.00" style="position: relative;padding-left: 20px; width: 190px;" name="vendor_payment" value="{{ old('vendor_payment', $order->vendor_payment) }}">
                                <span style="position: absolute; top: 7px; left: 25px; color: gray;">$</span>
                                @if ($errors->has('vendor_payment'))
                                    <span class="help-block">
                                                <strong>{{ $errors->first('vendor_payment') }}</strong>
                                            </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('shipping_status') ? ' has-error' : '' }}">
                            <label for="shipping_status" class="col-md-4 control-label">Shipping Status</label>

                            <div class="col-md-6" style="width: 200px;">
                                {!! Form::select('shipping_status', $shippingStatus->all(), null, ['class'=>'form-control', 'required']) !!}
                                @if ($errors->has('shipping_status'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('shipping_status') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('comments') ? ' has-error' : '' }}">
                            <label for="comments" class="col-md-4 control-label">Comments (Optional)</label>

                            <div class="col-md-6">
                                <textarea style="resize: none;" placeholder="Customers will see the comments posted here." rows="4" id="comments" type="text" class="form-control" name="comments" value="{{ old('comments', $order->comments) }}"></textarea>

                                @if ($errors->has('comments'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('comments') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Edit Order
                                </button>
                                <a href="{{url('order')}}" type="button" class="btn btn-default">Cancel</a>
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/currency.js') }}"></script>

@endsection
