@extends('layouts.app')

@section('content')
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/home')}}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{url('/branch')}}">Branch</a></li>
            <li class="breadcrumb-item active">Add a Branch</li>
        </ol>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Create a Branch</div>

                    <div class="panel-body form-horizontal">

                        {{ HTML::ul($errors->all()) }}

                        {!! Form::open(['url' => 'branch']) !!}
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('organization_id') ? ' has-error' : '' }}">
                            <label for="organization" class="col-md-4 control-label">Organizaiton</label>

                            <div class="col-md-6" style="">
                                {!! Form::select('organization_id', array(null => 'Select an Organization') + $organization->all(), null, ['class'=>'form-control', 'id' => 'loc-drop-down', 'required', 'autofocus']) !!}
                                @if ($errors->has('organization_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('organization_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('order_number') ? ' has-error' : '' }}">
                            <label for="order_number" class="col-md-4 control-label">Order Number</label>

                            <div class="col-md-6">
                                <input id="order_number" type="text" class="form-control" name="order_number" value="{{ old('order_number') }}" required>

                                @if ($errors->has('order_number'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('order_number') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('order_date') ? ' has-error' : '' }}">
                            <label for="order_date" class="col-md-4 control-label">Order Date</label>

                            <div class="col-md-6">
                                <input id="order_date" type="date" pattern="" class="form-control" name="order_date" value="<?php echo date('Y-m-d'); ?>" required autofocus>
                                @if ($errors->has('order_date'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('order_date') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('etd') ? ' has-error' : '' }}">
                            <label for="etd" class="col-md-4 control-label">Estimated Departure Date</label>

                            <div class="col-md-6">
                                <input type="date" class="form-control" name="etd" value="{{ old('etd') }}" autofocus>

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
                                <input id="eta" type="date" pattern="" maxlength="" style="width: 155px;" class="form-control" name="eta" value="{{ old('eta') }}" required autofocus>

                                @if ($errors->has('eta'))
                                    <span class="help-block">
                                                            <strong>{{ $errors->first('eta') }}</strong>
                                                        </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('vendor_payment') ? ' has-error' : '' }}">
                            <label for="vendor_payment" class="col-md-4 control-label">vendor_payment</label>

                            <div class="col-md-6">
                                <input id="vendor_payment" type="text" style="width: 190px;" class="form-control" name="vendor_payment" value="{{ old('vendor_payment') }}" required autofocus>
                                @if ($errors->has('vendor_payment'))
                                    <span class="help-block">
                                                <strong>{{ $errors->first('vendor_payment') }}</strong>
                                            </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('shipping_status') ? ' has-error' : '' }}">
                            <label for="shipping_status" class="col-md-4 control-label">Shipping Status</label>

                            <div class="col-md-6">
                                <input id="shipping_status" type="text" style="width: 190px;" class="form-control" name="shipping_status" value="{{ old('shipping_status') }}" required autofocus>
                                @if ($errors->has('shipping_status'))
                                    <span class="help-block">
                                                <strong>{{ $errors->first('shipping_status') }}</strong>
                                            </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('comments') ? ' has-error' : '' }}">
                            <label for="comments" class="col-md-4 control-label">Comments</label>

                            <div class="col-md-6">
                                <input id="comments" type="text" class="form-control" name="email" value="{{ old('comments') }}">

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
                                    Create
                                </button>
                                <a href="{{url('branch')}}" type="button" class="btn btn-default">Cancel</a>
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/hideCityState.js') }}"></script>
    <script src="{{ asset('js/zipcodefinder.js') }}"></script>
    <script src="{{ asset('js/phone.js') }}"></script>

@endsection
