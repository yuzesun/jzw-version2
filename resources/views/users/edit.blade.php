@extends('layouts.app')

@section('content')
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/home')}}">Home</a></li>
            <li class="breadcrumb-item active">User Profile</li>
        </ol>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">User Profile </div>

                    <div class="panel-body form-horizontal">

                        {{ HTML::ul($errors->all()) }}

                        {{ Form::model($user, array('route' => array('user.update', $user->id), 'method' => 'PUT')) }}

                        <div class="" style="">
                            @if (Session::has('message'))
                                <div class="alert alert-success" style="">{{ Session::get('message') }}</div>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">First Name</label>

                            <div class="col-md-6">
                                <input id="first_name" type="text" class="form-control" name="first_name" value="{{ old('first_name', $user->first_name) }}" required>

                                @if ($errors->has('first_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Last Name</label>

                            <div class="col-md-6">
                                <input id="last_name" type="text" class="form-control" name="last_name" value="{{ old('last_name', $user->last_name) }}" required>

                                @if ($errors->has('last_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('address_1') ? ' has-error' : '' }}">
                            <label for="address_1" class="col-md-4 control-label">Address 1</label>

                            <div class="col-md-6">
                                <input id="address_1" type="text" class="form-control" name="address_1" value="{{ old('address_1', $user->address_1) }}" required>

                                @if ($errors->has('address_1'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address_1') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('address_2') ? ' has-error' : '' }}">
                            <label for="address_2" class="col-md-4 control-label">Address 2 (Optional)</label>

                            <div class="col-md-6">
                                <input id="address_2" type="text" class="form-control" name="address_2" value="{{ old('address_2', $user->address_2) }}">

                                @if ($errors->has('address_2'))
                                    <span class="help-block">
                                            <strong>{{ $errors->first('address_2') }}</strong>
                                        </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('zipCode') ? ' has-error' : '' }}">
                            <label for="zipCode" class="col-md-4 control-label">Zip Code</label>

                            <div class="col-md-6">
                                <input id="zipCode" type="text" pattern="[0-9]{5}" maxlength="5" style="width: 70px;" class="form-control" name="zipCode" value="{{ old('zipCode', $user->zipCode) }}" required>

                                @if ($errors->has('zipCode'))
                                    <span class="help-block">
                                                            <strong>{{ $errors->first('zipCode') }}</strong>
                                                        </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
                            <label for="city" class="col-md-4 control-label">City</label>

                            <div class="col-md-6">
                                <input id="city" type="text" style="width: 190px;" class="form-control" name="city" value="{{ old('city', $user->city) }}" required>
                                @if ($errors->has('city'))
                                    <span class="help-block">
                                                <strong>{{ $errors->first('city') }}</strong>
                                            </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('state') ? ' has-error' : '' }}">
                            <label for="state" class="col-md-4 control-label">State</label>

                            <div class="col-md-6" style="width: 110px;">
                                {!! Form::select('state', array(null) + $states->all(), null, ['id' => 'state', 'class'=>'form-control', 'required']) !!}
                                @if ($errors->has('state'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('state') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('phone_number') ? ' has-error' : '' }}">
                            <label for="phone_number" class="col-md-4 control-label">Phone Number</label>

                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control" name="phone_number" value="{{ old('phone_number', $user->phone_number) }}" required>

                                @if ($errors->has('phone_number'))
                                    <span class="help-block">
                                                            <strong>{{ $errors->first('phone_number') }}</strong>
                                                        </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email', $user->email) }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Update User
                                </button>
                                <a href="{{url('/home')}}" type="button" class="btn btn-default">Cancel</a>
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/phone.js') }}"></script>

    <script src="{{ asset('js/zipcodefinder.js') }}"></script>

@endsection
